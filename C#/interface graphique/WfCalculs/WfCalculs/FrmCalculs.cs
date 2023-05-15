using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net.NetworkInformation;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WfCalculs
{
    public partial class FrmCalculs : Form
    {
        public FrmCalculs()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            // ajouter les 2 valeur siasie en récupérant la propriété Texte de
            //txtvaleur1 et txtValeur2
            // le result est affiché en valorisant la propriété Text de txtResult
            try // on tente d’exécuter le bloc
            {
                textResult.Text = (float.Parse(textValeur1.Text) +
               float.Parse(textValeur2.Text)).ToString();
                ldlOperation.Text = "+";
            }
            catch (Exception ex) // on surveille tous types d’erreur pouvant survenir
            {
                // en cas d’erreur on avertit l’utilisateur du problème
                MessageBox.Show(ex.Message, "Message d'erreur", MessageBoxButtons.OK,
               MessageBoxIcon.Stop);
            }

        }

        private void buttonMultiplication_Click(object sender, EventArgs e)
        {
            // ajouter les 2 valeur siasie en récupérant la propriété Texte de
            //txtvaleur1 et txtValeur2
            // le result est affiché en valorisant la propriété Text de txtResult
            try // on tente d’exécuter le bloc
            {
                textResult.Text = (float.Parse(textValeur1.Text) *
               float.Parse(textValeur2.Text)).ToString();
                ldlOperation.Text = "*";
            }
            catch (Exception ex) // on surveille tous types d’erreur pouvant survenir
            {
                // en cas d’erreur on avertit l’utilisateur du problème
                MessageBox.Show(ex.Message, "Message d'erreur", MessageBoxButtons.OK,
               MessageBoxIcon.Stop);
            }
        }

        private void btnEffacer_Click(object sender, EventArgs e)
        {
            textValeur1.Text = " ";
            textValeur2.Text = " ";
            ldlOperation.Text = " ";
            textResult.Text = " ";
        }

        private void btnQuitter_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void textValeur1_TextChanged(object sender, EventArgs e)
        {
            ldlOperation.Text = " ";
        }

        private void textValeur2_TextChanged(object sender, EventArgs e)
        {
            ldlOperation.Text = " ";
        }
    }
}
