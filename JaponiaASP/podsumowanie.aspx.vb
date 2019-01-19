Imports System.Collections
Partial Class Default2
    Inherits System.Web.UI.Page
    Dim przesylka As Integer
    Dim cale As Integer = 0
    Dim dostawy As New Hashtable()
    Dim koszyk2 As New Hashtable()
    Protected Sub dostawa_SelectedIndexChanged(ByVal sender As Object, ByVal e As System.EventArgs) Handles dostawa.SelectedIndexChanged
        'If dostawa.SelectedItem.Value Is "poczta" Then
        'przesylka = dostawy("poczta")
        'End If
        'If dostawa.SelectedItem.Value Is "kurier" Then
        'przesylka = 15
        'End If
        'If dostawa.SelectedItem.Value Is "paczkomat" Then
        'przesylka = dostawy("paczkomat")
        'End If
        'If dostawa.SelectedItem.Value Is "osobisty" Then
        'przesylka = dostawy("osobisty")
        'End If '
    End Sub
    Protected Sub Page_Load(ByVal sender As Object,
       ByVal e As System.EventArgs) Handles Me.Load
        If dostawa.SelectedItem.Value Is "poczta" Then
            przesylka = 5
        End If
        If dostawa.SelectedItem.Value Is "kurier" Then
            przesylka = 15
        End If
        If dostawa.SelectedItem.Value Is "paczkomat" Then
            przesylka = 10
        End If
        If dostawa.SelectedItem.Value Is "osobisty" Then
            przesylka = 0
        End If
        'Try
        'dostawy.Add("poczta", 5)
        'dostawy.Add("kurier", 15)
        'dostawy.Add("paczkomat", 10)
        'dostawy.Add("osobisty", 0)
        'Catch ae As ArgumentException
        'End Try
        koszyk2 = Session("koszyk")
        Dim cena As Integer = 0
        If (koszyk2.Count = 0) Then
            outputLabel.Text = "Koszyk jest pusty "
        Else
            potwierdz.Visible = "True"
            outputLabel.Text = " W koszyku znajduja sie: <br/>"
            For Each Item In koszyk2
                outputLabel.Text &= " <br/>"
                outputLabel.Text &= Item.key
                outputLabel.Text &= " - "
                outputLabel.Text &= Item.value
                outputLabel.Text &= " zl"
                cena += Item.value
            Next
            outputLabel.Text &= " <br/>"
            outputLabel.Text &= " Laczna cena produktow: <br/>"
            outputLabel.Text &= cena
            outputLabel.Text &= " zl <br/>"
            outputLabel.Text &= " Laczna cena calego zamowienia: <br/>"
            cale = cena + przesylka
            outputLabel.Text &= cale
            outputLabel.Text &= " zl <br/>"
        End If

    End Sub
    
    
    Protected Sub potwierdz_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles potwierdz.Click
        Session("zaplata") = cale
        Server.Transfer("potwierdzenie.aspx")
    End Sub
End Class
