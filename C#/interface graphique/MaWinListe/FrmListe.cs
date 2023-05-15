using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
// aymeric moreau 21/02/2023
namespace MaWinListe
{
    public partial class FrmListe : Form
    {
       
        public FrmListe()
        {
            InitializeComponent();

            
            }

        private void btnAjouter_Click(object sender, EventArgs e)
        {




            // Ajouter le contenu du textbox a la liste
            if (txtSaisie.Text == "")
            {
                MessageBox.Show( "Erreur veillez remplire le champ texte");
            }
            else
            {
                lbxListe.Items.Add(txtSaisie.Text);

                //effacer le contenu du textbox
                txtSaisie.Text = "";

                // remetre le focus sur le textbox
                txtSaisie.Focus();
            };
        }

        private void btnSupprimer_Click(object sender, EventArgs e)
        {
             
            

            try // on tente d’exécuter le bloc
            {
                //on supp l(item actuellement sélectionneé de la liste
                lbxListe.Items.RemoveAt(lbxListe.SelectedIndex);
            }
            catch (Exception ex) // on surveille tous types d’erreur pouvant survenir
            {
                // en cas d’erreur on avertit l’utilisateur du problème
                MessageBox.Show(ex.Message, "Message d'erreur", MessageBoxButtons.OK,
               MessageBoxIcon.Stop);
            }
        }
    }
}
