using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using libBanque;

namespace AppWindowsBanque
{
    public partial class FrmBanque : Form
    {
        //variable globales au formulaire = propriété du formulaire
        private AgenceBancaire monAgence;
        public FrmBanque()
        {
            InitializeComponent();
            InitializeLaBanque();
        }

        private void InitializeLaBanque()
        {
            // Instaciation de l'objet monAgence, en passant en paramètre le nom de l'agence
            monAgence = new AgenceBancaire("TOURS");
            // Modification du titre de l'onglet
            lblAcTitre.Text = "AGENCE de " + monAgence.NomAgence;
            //Appel de la procédure générant le jeu d'essai, autrement dit créant les compte de l'agence
            GenererJeuDessai();
            // Appel de la procedure remplissant le DataGridView avec la liste des compte de de l'agence
            RemplieListeComptes();
        }

        private void RemplieListeComptes()
        {
            // On indique tout simplement que la source de données de la OataGridView est une collection
            // -Y La DataGridView contiendra autant de lignes que la collection contient d'objets
            // -> La DataGridView contiendra autant de colonnes que le type d' objet contient de property
            dgvListeComptes.DataSource = null;
            dgvListeComptes.DataSource = monAgence.LesComptes;
        }

        private void GenererJeuDessai()
        {
            CompteBancaires cbPatrick = new CompteBancaires("0211651079B", "M. MARTIN Patrick");
            CompteBancaires cbMathilde = new CompteBancaires("1231212312D", "Mme. NOUVEAU Mathilde", 1500.00m);
            CompteBancaires cbJulien = new CompteBancaires("9173826431KC", "M. LIBSON Julien", 5050.00m);
            monAgence.AjouterCompte(cbPatrick);
            monAgence.AjouterCompte(cbMathilde);
            monAgence.AjouterCompte(cbJulien);
        }



        private void tabConsultation_Enter(object sender, EventArgs e)
        {
            RemplirComBox(cbxCoChoixCompte);
        }

        private void RemplirComBox(ComboBox laCombo)
        {
            // Supprime le contenu actuel éventuel de la combox
            laCombo.Items.Clear();
            // Remplit la combobox à l'aide de la stucture itérative foreach
            // Pour chaque objet de type CompteBancaire
            // Dans la col lection monAgence.LesComptes
            foreach(CompteBancaires unCompte in monAgence.LesComptes)
            {
                //Ajoute le numéro du compte suivi du titulaire dans les items de la conbobox
                 laCombo.Items.Add(unCompte.NumCompte + "(" + unCompte.NomTitulaire + ")");
                // Items est une propriété de la combobox certes, mais c aussi une collection
                //En fait une col lection d' items (ou lignes)
            }
        }

        private void cbxCoChoixCompte_SelectedIndexChanged(object sender, EventArgs e)
        {
            //On récupére l'indice (ou l'index) du compte sélectionné
            int iCompte = cbxCoChoixCompte.SelectedIndex;
            CompteBancaires leCompte; //déclaration d'un objet Comptebancaire

            if(iCompte >= 0)
            {
                leCompte = monAgence.LesComptes.ElementAt(iCompte);
                //Une fois l'objet CompteBancaire qui nous intéresse récupére 
                //on affiche la valeur de ses prorpriété dans les texrBox
                txtCoNumero.Text = leCompte.NumCompte.ToString();
                txtCoTitulaire.Text = leCompte.NomTitulaire.ToString();
                txtCoSoldeActuel.Text = leCompte.SoldeCompte.ToString();
            }
        }

        private void tabVersement_Enter(object sender, EventArgs e)
        {
            RemplirComBox(cbxVeChoixCompte);
        }



        private void tabRetrait_Enter(object sender, EventArgs e)
        {
            RemplirComBox(cbxReChoixCompte);
        }

        private void tabVirement_Enter(object sender, EventArgs e)
        {
            RemplirComBox(cbxViChoixCompteCr);
            RemplirComBox(cbxViChoixCompteDe);
        }

        private void btnVeEnregister_Click(object sender, EventArgs e)
        {
            try
            {
                
                decimal montant = decimal.Parse(txtVeMontant.Text);
                //On récupére l'indice (ou l'index) du compte sélectionné
                int iCompte = cbxVeChoixCompte.SelectedIndex;
                CompteBancaires leCompte; //déclaration d'un objet Comptebancaire
                

                string num = iCompte.ToString();
                
                MessageBox.Show( "ok 1"+num);
                if (iCompte >= 0)
                {   
                    leCompte = monAgence.LesComptes.ElementAt(iCompte);
   
                    MessageBox.Show("ok if 1");
                    if (leCompte.CrediterCompte(montant) == true)
                    {
                        MessageBox.Show("ok if 2");
                        labVeValide.Text = "Le versement a bien été enreistré";
                    }
                    else
                    {
                        labVeValide.Text = "erreur";
                    }
                }
            }
            catch (Exception ex) // on surveille tous types d’erreur pouvant survenir
            {
                if (txtVeMontant.Text == "0" && txtVeMontant.Text == "")
                {
                    labVeValide.Text = "erreur veiller donner un montant valide";
                }
                
                // en cas d’erreur on avertit l’utilisateur du problème
                MessageBox.Show(ex.Message, "Message d'erreur", MessageBoxButtons.OK,
               MessageBoxIcon.Stop);
            }
            txtVeMontant.Text = "";
            cbxVeChoixCompte.SelectedIndex = -1;
        }

        private void btnCrCreer_Click(object sender, EventArgs e)
        {
            
            try
            {
                if (txtCrSold.Text == "")
                {
                    CompteBancaires compte1 = new CompteBancaires(txtCrNumero.Text, txtCrTitulaire.Text);
                    monAgence.AjouterCompte(compte1);
                }
                else
                {
                    decimal sold = decimal.Parse(txtCrSold.Text);
                    CompteBancaires compte1 = new CompteBancaires(txtCrNumero.Text, txtCrTitulaire.Text, sold);
                    monAgence.AjouterCompte(compte1);
                }
                RemplieListeComptes();
                labCrValide.Text = "Le compte a bien été créer !";
            }
            catch (Exception ex) // on surveille tous types d’erreur pouvant survenir
            {

                // en cas d’erreur on avertit l’utilisateur du problème
                MessageBox.Show(ex.Message, "Message d'erreur", MessageBoxButtons.OK,
               MessageBoxIcon.Stop);
            }
            txtCrNumero.Text = "";
            txtCrSold.Text = "";
            txtCrTitulaire.Text = "";


        }

        private void brnReEnregistrer_Click(object sender, EventArgs e)
        {
            try
            {

                decimal montant = decimal.Parse(txtReMontant.Text);
                //On récupére l'indice (ou l'index) du compte sélectionné
                int iCompte = cbxReChoixCompte.SelectedIndex;
                CompteBancaires leCompte; //déclaration d'un objet Comptebancaire


                string num = iCompte.ToString();

                MessageBox.Show("ok 1" + num);
                if (iCompte >= 0)
                {
                    leCompte = monAgence.LesComptes.ElementAt(iCompte);

                    MessageBox.Show("ok if 1");
                    if (leCompte.DebiterCompte(montant) == true)
                    {
                        MessageBox.Show("ok if 2");
                        labReValide.Text = "Le débitement a bien été enreistré";
                    }
                    else
                    {
                        labReValide.Text = "erreur";
                    }
                }
            }
            catch (Exception ex) // on surveille tous types d’erreur pouvant survenir
            {
                if (txtReMontant.Text == "0" && txtReMontant.Text == "")
                {
                    labReValide.Text = "erreur veiller donner un montant valide";
                }

                // en cas d’erreur on avertit l’utilisateur du problème
                MessageBox.Show(ex.Message, "Message d'erreur", MessageBoxButtons.OK,
               MessageBoxIcon.Stop);
            }
            txtReMontant.Text = "";
            cbxReChoixCompte.SelectedIndex = -1;
        }

        private void btnViEnregister_Click(object sender, EventArgs e)
        {
            try
            {

                decimal montant = decimal.Parse(txtViMontant.Text);
                //On récupére l'indice (ou l'index) du compte sélectionné
                int iCompte = cbxViChoixCompteCr.SelectedIndex;
                int iCompte2 = cbxViChoixCompteDe.SelectedIndex;
                CompteBancaires leCompte; //déclaration d'un objet Comptebancaire
                CompteBancaires leCompte2; //déclaration d'un objet Comptebancaire


                string num = iCompte.ToString();

                MessageBox.Show("ok 1" + num);
                if (iCompte >= 0)
                {
                    leCompte = monAgence.LesComptes.ElementAt(iCompte);
                    leCompte2 = monAgence.LesComptes.ElementAt(iCompte2);

                    MessageBox.Show("ok if 1");
                    if (leCompte2.DebiterCompte(montant) == true && leCompte.CrediterCompte(montant) == true && leCompte != leCompte2)
                    {
                        MessageBox.Show("ok if 2");
                        labViValide.Text = "Le virement a bien été enreistré";
                    }
                    else
                    {
                        labViValide.Text = "ERREUR le virement n'a pas put s'effectuer";
                    }
                }
            }
            catch (Exception ex) // on surveille tous types d’erreur pouvant survenir
            {
                if (txtViMontant.Text == "0" && txtViMontant.Text == "")
                {
                    labViValide.Text = "erreur veiller donner un montant valide ou choisir des compte différent";
                }
                //if ()
                //{
                //    labViValide.Text = "erreur veiller choisir des compte différent";
                //}

                // en cas d’erreur on avertit l’utilisateur du problème
                MessageBox.Show(ex.Message, "Message d'erreur", MessageBoxButtons.OK,
               MessageBoxIcon.Stop);
            }
            txtViMontant.Text = "";
            cbxViChoixCompteCr.SelectedIndex = -1;
            cbxViChoixCompteDe.SelectedIndex = -1;
            
        }

        private void tabControl1_Enter(object sender, EventArgs e)
        {
            RemplieListeComptes();
        }

        private void btnCrAnnuler_Click(object sender, EventArgs e)
        {
            txtCrNumero.Text = "";
            txtCrSold.Text = "";
            txtCrTitulaire.Text = "";
            labCrValide.Text = "";
        }

        private void btnVeAnnuler_Click(object sender, EventArgs e)
        {
            txtVeMontant.Text = "";
            cbxVeChoixCompte.SelectedIndex = -1;
            labVeValide.Text = "";
            
        }

        private void brnREAnnuler_Click(object sender, EventArgs e)
        {
            txtReMontant.Text = "";0
            cbxReChoixCompte.SelectedIndex = -1;
            labReValide.Text = "";
        }

        private void btnViAnnuler_Click(object sender, EventArgs e)
        {
            txtViMontant.Text = "";
            cbxViChoixCompteCr.SelectedIndex = -1;
            cbxViChoixCompteDe.SelectedIndex = -1;
            labViValide.Text = "";
        }
    }
}
    
    

