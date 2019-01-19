
Partial Class strona3
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object,
        ByVal e As System.EventArgs) Handles Me.Load
        If IsPostBack Then
            Validate()

            If IsValid Then
                Dim Imie2 As String = imie.Text
                Dim Data2 As String = data.Text
                Dim Numer2 As String = numer.Text
                Dim Strona2 As String = strona.Text
                Dim Plec2 As String = plec.Text

                outputLabel.Text = "Dziekuje za wypelnienie ankiety<br/>" &
                   "Podane przez ciebie dane:<br/>"
                outputLabel.Text &=
                   String.Format("Imie: {0}{1}Data urodzenia: {2}{1} Numer telefonu: {3}{1}Ulubiona strona: {4}{1}Plec: {5}",
                      Imie2, "<br/>", Data2, Numer2, Strona2, Plec2)
                outputLabel.Visible = True ' display the output message
            End If
        End If
    End Sub ' Page_Load
End Class
