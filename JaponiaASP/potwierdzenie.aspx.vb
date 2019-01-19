
Partial Class _Default
    Inherits System.Web.UI.Page
    Protected Sub Page_Load(ByVal sender As Object,
       ByVal e As System.EventArgs) Handles Me.Load
        Dim Zaplata As Integer = 0
        Zaplata = Session("zaplata")
        outputLabel.Text = " Dziekuejmy za dokonanie zakupu pamiatek na naszej stronie, cale zamowienie wynioslo: "
        outputLabel.Text &= Zaplata
        outputLabel.Text &= " zl "
        outputLabel.Text &= " <br/>"
        Session.Abandon()
    End Sub
End Class
