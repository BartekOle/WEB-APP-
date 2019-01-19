Imports System.Collections
Partial Class _Default

    Inherits System.Web.UI.Page
    Dim Produkty As New Hashtable()
    Dim Koszyk As New Hashtable()
    Dim ilosc As Integer = 0

    Protected Sub Page_Load(ByVal sender As Object,
       ByVal e As System.EventArgs) Handles Me.Load
        Try
            Produkty.Add("Pocztowka A5 - Tokio", 15)
            Produkty.Add("Pocztowka A5 - Kioto", 17)
            Produkty.Add("Pocztowka A5 - Osaka", 20)
            Produkty.Add("Pocztowka A4 - Gora Fuji", 40)
            Produkty.Add("Pocztowka A4 - Akihabara", 30)
            Produkty.Add("Breloczek Flaga Japonii", 10)
            Produkty.Add("Breloczek Panorama Tokio", 30)
            Produkty.Add("Breloczek Gora Fuji", 20)
            Produkty.Add("Breloczek Panorama Kioto", 40)
            Produkty.Add("Breloczek Panorama Osaki", 45)
            Produkty.Add("Magnez Herb Japonii", 15)
            Produkty.Add("Magnez Panorama Jokohamy", 40)
            Produkty.Add("Magnez Panorama Akihabary", 27)
            Produkty.Add("Magnez Panorama Sapporo", 55)
            Produkty.Add("Magnez Panorama Kobe", 75)
        Catch ae As ArgumentException
        End Try
    End Sub

    Protected Sub kategorie_SelectedIndexChanged(ByVal sender As Object, ByVal e As System.EventArgs) Handles kategorie.SelectedIndexChanged
        If kategorie.SelectedItem.Text Is "Pocztowka" Then
            Pocztowka.Visible = "True"
            Breloczek.Visible = "False"
            Magnez.Visible = "False"
        End If
        If kategorie.SelectedItem.Text Is "Breloczek" Then
            Breloczek.Visible = "True"
            Magnez.Visible = "False"
            Pocztowka.Visible = "False"
        End If
        If kategorie.SelectedItem.Text Is "Magnez" Then
            Magnez.Visible = "True"
            Breloczek.Visible = "False"
            Pocztowka.Visible = "False"
        End If
    End Sub


    Protected Sub submitButton_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles submitButton.Click

        For Each li As ListItem In Pocztowka.Items

            If li.Selected Then
                Koszyk.Add(li.Value, Produkty(li.Value))
                ilosc += 1
            End If
        Next
        For Each li As ListItem In Breloczek.Items
            If li.Selected Then
                Koszyk.Add(li.Value, Produkty(li.Value))
                ilosc += 1
            End If
        Next
        For Each li As ListItem In Magnez.Items
            If li.Selected Then
                Koszyk.Add(li.Value, Produkty(li.Value))
                ilosc += 1
            End If
        Next
        outputLabel.Visible = "true"
        outputLabel.Text = "Produktow w koszyku: "
        outputLabel.Text &= ilosc
        Session("koszyk") = Koszyk
        podsumowanie.Visible = "True"
        '  Server.Transfer("podsumowanie.ASPX")

        ' For Each Item In Koszyk
        'outputLabel.Text &= " "
        'outputLabel.Text &= Item.key
        'Next

    End Sub
End Class

