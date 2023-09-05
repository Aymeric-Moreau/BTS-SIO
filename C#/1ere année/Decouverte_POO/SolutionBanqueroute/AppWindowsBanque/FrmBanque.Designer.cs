namespace AppWindowsBanque
{
    partial class FrmBanque
    {
        /// <summary>
        /// Variable nécessaire au concepteur.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Nettoyage des ressources utilisées.
        /// </summary>
        /// <param name="disposing">true si les ressources managées doivent être supprimées ; sinon, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Code généré par le Concepteur Windows Form

        /// <summary>
        /// Méthode requise pour la prise en charge du concepteur - ne modifiez pas
        /// le contenu de cette méthode avec l'éditeur de code.
        /// </summary>
        private void InitializeComponent()
        {
            this.tabControl1 = new System.Windows.Forms.TabControl();
            this.tabAccueil = new System.Windows.Forms.TabPage();
            this.label1 = new System.Windows.Forms.Label();
            this.lblAcTitre = new System.Windows.Forms.Label();
            this.dgvListeComptes = new System.Windows.Forms.DataGridView();
            this.tabConsultation = new System.Windows.Forms.TabPage();
            this.txtCoSoldeActuel = new System.Windows.Forms.TextBox();
            this.txtCoTitulaire = new System.Windows.Forms.TextBox();
            this.txtCoNumero = new System.Windows.Forms.TextBox();
            this.cbxCoChoixCompte = new System.Windows.Forms.ComboBox();
            this.label6 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.tabCreation = new System.Windows.Forms.TabPage();
            this.btnCrAnnuler = new System.Windows.Forms.Button();
            this.btnCrCreer = new System.Windows.Forms.Button();
            this.txtCrSold = new System.Windows.Forms.TextBox();
            this.txtCrTitulaire = new System.Windows.Forms.TextBox();
            this.txtCrNumero = new System.Windows.Forms.TextBox();
            this.label13 = new System.Windows.Forms.Label();
            this.label12 = new System.Windows.Forms.Label();
            this.labCrValide = new System.Windows.Forms.Label();
            this.label10 = new System.Windows.Forms.Label();
            this.label9 = new System.Windows.Forms.Label();
            this.label8 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.tabVersement = new System.Windows.Forms.TabPage();
            this.cbxVeChoixCompte = new System.Windows.Forms.ComboBox();
            this.label17 = new System.Windows.Forms.Label();
            this.labVeValide = new System.Windows.Forms.Label();
            this.label16 = new System.Windows.Forms.Label();
            this.label15 = new System.Windows.Forms.Label();
            this.label14 = new System.Windows.Forms.Label();
            this.txtVeMontant = new System.Windows.Forms.TextBox();
            this.btnVeAnnuler = new System.Windows.Forms.Button();
            this.btnVeEnregister = new System.Windows.Forms.Button();
            this.tabRetrait = new System.Windows.Forms.TabPage();
            this.cbxReChoixCompte = new System.Windows.Forms.ComboBox();
            this.label22 = new System.Windows.Forms.Label();
            this.labReValide = new System.Windows.Forms.Label();
            this.label19 = new System.Windows.Forms.Label();
            this.label20 = new System.Windows.Forms.Label();
            this.label21 = new System.Windows.Forms.Label();
            this.txtReMontant = new System.Windows.Forms.TextBox();
            this.brnREAnnuler = new System.Windows.Forms.Button();
            this.brnReEnregistrer = new System.Windows.Forms.Button();
            this.tabVirement = new System.Windows.Forms.TabPage();
            this.cbxViChoixCompteCr = new System.Windows.Forms.ComboBox();
            this.cbxViChoixCompteDe = new System.Windows.Forms.ComboBox();
            this.label28 = new System.Windows.Forms.Label();
            this.label23 = new System.Windows.Forms.Label();
            this.labViValide = new System.Windows.Forms.Label();
            this.label25 = new System.Windows.Forms.Label();
            this.label26 = new System.Windows.Forms.Label();
            this.label27 = new System.Windows.Forms.Label();
            this.txtViMontant = new System.Windows.Forms.TextBox();
            this.btnViAnnuler = new System.Windows.Forms.Button();
            this.btnViEnregister = new System.Windows.Forms.Button();
            this.tabControl1.SuspendLayout();
            this.tabAccueil.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvListeComptes)).BeginInit();
            this.tabConsultation.SuspendLayout();
            this.tabCreation.SuspendLayout();
            this.tabVersement.SuspendLayout();
            this.tabRetrait.SuspendLayout();
            this.tabVirement.SuspendLayout();
            this.SuspendLayout();
            // 
            // tabControl1
            // 
            this.tabControl1.Controls.Add(this.tabAccueil);
            this.tabControl1.Controls.Add(this.tabConsultation);
            this.tabControl1.Controls.Add(this.tabCreation);
            this.tabControl1.Controls.Add(this.tabVersement);
            this.tabControl1.Controls.Add(this.tabRetrait);
            this.tabControl1.Controls.Add(this.tabVirement);
            this.tabControl1.Dock = System.Windows.Forms.DockStyle.Fill;
            this.tabControl1.Location = new System.Drawing.Point(0, 0);
            this.tabControl1.Margin = new System.Windows.Forms.Padding(4);
            this.tabControl1.Name = "tabControl1";
            this.tabControl1.SelectedIndex = 0;
            this.tabControl1.Size = new System.Drawing.Size(836, 428);
            this.tabControl1.TabIndex = 0;
            this.tabControl1.Enter += new System.EventHandler(this.tabControl1_Enter);
            // 
            // tabAccueil
            // 
            this.tabAccueil.Controls.Add(this.label1);
            this.tabAccueil.Controls.Add(this.lblAcTitre);
            this.tabAccueil.Controls.Add(this.dgvListeComptes);
            this.tabAccueil.Location = new System.Drawing.Point(4, 25);
            this.tabAccueil.Margin = new System.Windows.Forms.Padding(4);
            this.tabAccueil.Name = "tabAccueil";
            this.tabAccueil.Padding = new System.Windows.Forms.Padding(4);
            this.tabAccueil.Size = new System.Drawing.Size(828, 399);
            this.tabAccueil.TabIndex = 0;
            this.tabAccueil.Text = "Accueil";
            this.tabAccueil.UseVisualStyleBackColor = true;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(86, 81);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(165, 16);
            this.label1.TabIndex = 2;
            this.label1.Text = "Liste des compte agences";
            // 
            // lblAcTitre
            // 
            this.lblAcTitre.AutoSize = true;
            this.lblAcTitre.Location = new System.Drawing.Point(382, 30);
            this.lblAcTitre.Name = "lblAcTitre";
            this.lblAcTitre.Size = new System.Drawing.Size(142, 16);
            this.lblAcTitre.TabIndex = 1;
            this.lblAcTitre.Text = "AGENCES de TOURS";
            // 
            // dgvListeComptes
            // 
            this.dgvListeComptes.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom) 
            | System.Windows.Forms.AnchorStyles.Left) 
            | System.Windows.Forms.AnchorStyles.Right)));
            this.dgvListeComptes.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgvListeComptes.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvListeComptes.Location = new System.Drawing.Point(89, 100);
            this.dgvListeComptes.Name = "dgvListeComptes";
            this.dgvListeComptes.RowHeadersWidth = 51;
            this.dgvListeComptes.RowTemplate.Height = 24;
            this.dgvListeComptes.Size = new System.Drawing.Size(609, 238);
            this.dgvListeComptes.TabIndex = 0;
            // 
            // tabConsultation
            // 
            this.tabConsultation.Controls.Add(this.txtCoSoldeActuel);
            this.tabConsultation.Controls.Add(this.txtCoTitulaire);
            this.tabConsultation.Controls.Add(this.txtCoNumero);
            this.tabConsultation.Controls.Add(this.cbxCoChoixCompte);
            this.tabConsultation.Controls.Add(this.label6);
            this.tabConsultation.Controls.Add(this.label5);
            this.tabConsultation.Controls.Add(this.label4);
            this.tabConsultation.Controls.Add(this.label3);
            this.tabConsultation.Controls.Add(this.label2);
            this.tabConsultation.Location = new System.Drawing.Point(4, 25);
            this.tabConsultation.Margin = new System.Windows.Forms.Padding(4);
            this.tabConsultation.Name = "tabConsultation";
            this.tabConsultation.Padding = new System.Windows.Forms.Padding(4);
            this.tabConsultation.Size = new System.Drawing.Size(828, 399);
            this.tabConsultation.TabIndex = 1;
            this.tabConsultation.Text = "Consultation";
            this.tabConsultation.UseVisualStyleBackColor = true;
            this.tabConsultation.Enter += new System.EventHandler(this.tabConsultation_Enter);
            // 
            // txtCoSoldeActuel
            // 
            this.txtCoSoldeActuel.Location = new System.Drawing.Point(300, 268);
            this.txtCoSoldeActuel.Name = "txtCoSoldeActuel";
            this.txtCoSoldeActuel.ReadOnly = true;
            this.txtCoSoldeActuel.Size = new System.Drawing.Size(176, 22);
            this.txtCoSoldeActuel.TabIndex = 8;
            // 
            // txtCoTitulaire
            // 
            this.txtCoTitulaire.Location = new System.Drawing.Point(300, 215);
            this.txtCoTitulaire.Name = "txtCoTitulaire";
            this.txtCoTitulaire.ReadOnly = true;
            this.txtCoTitulaire.Size = new System.Drawing.Size(268, 22);
            this.txtCoTitulaire.TabIndex = 7;
            // 
            // txtCoNumero
            // 
            this.txtCoNumero.Location = new System.Drawing.Point(300, 164);
            this.txtCoNumero.Name = "txtCoNumero";
            this.txtCoNumero.ReadOnly = true;
            this.txtCoNumero.Size = new System.Drawing.Size(176, 22);
            this.txtCoNumero.TabIndex = 6;
            // 
            // cbxCoChoixCompte
            // 
            this.cbxCoChoixCompte.FormattingEnabled = true;
            this.cbxCoChoixCompte.Location = new System.Drawing.Point(272, 98);
            this.cbxCoChoixCompte.Name = "cbxCoChoixCompte";
            this.cbxCoChoixCompte.Size = new System.Drawing.Size(271, 24);
            this.cbxCoChoixCompte.TabIndex = 5;
            this.cbxCoChoixCompte.SelectedIndexChanged += new System.EventHandler(this.cbxCoChoixCompte_SelectedIndexChanged);
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(130, 268);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(148, 16);
            this.label6.TabIndex = 4;
            this.label6.Text = "Solde actuel du compte";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(130, 215);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(121, 16);
            this.label5.TabIndex = 3;
            this.label5.Text = "Titulaire du compte";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(133, 164);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(122, 16);
            this.label4.TabIndex = 2;
            this.label4.Text = "Numéro de compte";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(130, 98);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(113, 16);
            this.label3.TabIndex = 1;
            this.label3.Text = "Choisir un compte";
            // 
            // label2
            // 
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 20F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(237, 28);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(410, 158);
            this.label2.TabIndex = 0;
            this.label2.Text = "Consultation de Compte";
            // 
            // tabCreation
            // 
            this.tabCreation.Controls.Add(this.btnCrAnnuler);
            this.tabCreation.Controls.Add(this.btnCrCreer);
            this.tabCreation.Controls.Add(this.txtCrSold);
            this.tabCreation.Controls.Add(this.txtCrTitulaire);
            this.tabCreation.Controls.Add(this.txtCrNumero);
            this.tabCreation.Controls.Add(this.label13);
            this.tabCreation.Controls.Add(this.label12);
            this.tabCreation.Controls.Add(this.labCrValide);
            this.tabCreation.Controls.Add(this.label10);
            this.tabCreation.Controls.Add(this.label9);
            this.tabCreation.Controls.Add(this.label8);
            this.tabCreation.Controls.Add(this.label7);
            this.tabCreation.Location = new System.Drawing.Point(4, 25);
            this.tabCreation.Margin = new System.Windows.Forms.Padding(4);
            this.tabCreation.Name = "tabCreation";
            this.tabCreation.Size = new System.Drawing.Size(828, 399);
            this.tabCreation.TabIndex = 2;
            this.tabCreation.Text = "Création compte";
            this.tabCreation.UseVisualStyleBackColor = true;
            // 
            // btnCrAnnuler
            // 
            this.btnCrAnnuler.Location = new System.Drawing.Point(594, 344);
            this.btnCrAnnuler.Name = "btnCrAnnuler";
            this.btnCrAnnuler.Size = new System.Drawing.Size(87, 29);
            this.btnCrAnnuler.TabIndex = 10;
            this.btnCrAnnuler.Text = "Annulez";
            this.btnCrAnnuler.UseVisualStyleBackColor = true;
            this.btnCrAnnuler.Click += new System.EventHandler(this.btnCrAnnuler_Click);
            // 
            // btnCrCreer
            // 
            this.btnCrCreer.Location = new System.Drawing.Point(469, 344);
            this.btnCrCreer.Name = "btnCrCreer";
            this.btnCrCreer.Size = new System.Drawing.Size(97, 29);
            this.btnCrCreer.TabIndex = 9;
            this.btnCrCreer.Text = "Créer";
            this.btnCrCreer.UseVisualStyleBackColor = true;
            this.btnCrCreer.Click += new System.EventHandler(this.btnCrCreer_Click);
            // 
            // txtCrSold
            // 
            this.txtCrSold.Location = new System.Drawing.Point(360, 209);
            this.txtCrSold.Name = "txtCrSold";
            this.txtCrSold.Size = new System.Drawing.Size(100, 22);
            this.txtCrSold.TabIndex = 8;
            // 
            // txtCrTitulaire
            // 
            this.txtCrTitulaire.Location = new System.Drawing.Point(360, 143);
            this.txtCrTitulaire.Name = "txtCrTitulaire";
            this.txtCrTitulaire.Size = new System.Drawing.Size(236, 22);
            this.txtCrTitulaire.TabIndex = 7;
            // 
            // txtCrNumero
            // 
            this.txtCrNumero.Location = new System.Drawing.Point(360, 83);
            this.txtCrNumero.Name = "txtCrNumero";
            this.txtCrNumero.Size = new System.Drawing.Size(100, 22);
            this.txtCrNumero.TabIndex = 6;
            // 
            // label13
            // 
            this.label13.AutoSize = true;
            this.label13.Location = new System.Drawing.Point(466, 212);
            this.label13.Name = "label13";
            this.label13.Size = new System.Drawing.Size(14, 16);
            this.label13.TabIndex = 5;
            this.label13.Text = "€";
            // 
            // label12
            // 
            this.label12.Location = new System.Drawing.Point(0, 0);
            this.label12.Name = "label12";
            this.label12.Size = new System.Drawing.Size(100, 23);
            this.label12.TabIndex = 0;
            // 
            // labCrValide
            // 
            this.labCrValide.AutoSize = true;
            this.labCrValide.Location = new System.Drawing.Point(149, 276);
            this.labCrValide.Name = "labCrValide";
            this.labCrValide.Size = new System.Drawing.Size(0, 16);
            this.labCrValide.TabIndex = 4;
            // 
            // label10
            // 
            this.label10.AutoSize = true;
            this.label10.Location = new System.Drawing.Point(136, 209);
            this.label10.Name = "label10";
            this.label10.Size = new System.Drawing.Size(134, 16);
            this.label10.TabIndex = 3;
            this.label10.Text = "Sold initial du compte";
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Location = new System.Drawing.Point(149, 143);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(121, 16);
            this.label9.TabIndex = 2;
            this.label9.Text = "Titulaire du compte";
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Location = new System.Drawing.Point(149, 83);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(121, 16);
            this.label8.TabIndex = 1;
            this.label8.Text = "Numéro du compte";
            // 
            // label7
            // 
            this.label7.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label7.Location = new System.Drawing.Point(201, 27);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(405, 28);
            this.label7.TabIndex = 0;
            this.label7.Text = "CREATION D\'UN COMPTE";
            // 
            // tabVersement
            // 
            this.tabVersement.Controls.Add(this.cbxVeChoixCompte);
            this.tabVersement.Controls.Add(this.label17);
            this.tabVersement.Controls.Add(this.labVeValide);
            this.tabVersement.Controls.Add(this.label16);
            this.tabVersement.Controls.Add(this.label15);
            this.tabVersement.Controls.Add(this.label14);
            this.tabVersement.Controls.Add(this.txtVeMontant);
            this.tabVersement.Controls.Add(this.btnVeAnnuler);
            this.tabVersement.Controls.Add(this.btnVeEnregister);
            this.tabVersement.Location = new System.Drawing.Point(4, 25);
            this.tabVersement.Margin = new System.Windows.Forms.Padding(4);
            this.tabVersement.Name = "tabVersement";
            this.tabVersement.Size = new System.Drawing.Size(828, 399);
            this.tabVersement.TabIndex = 3;
            this.tabVersement.Text = "Versement";
            this.tabVersement.UseVisualStyleBackColor = true;
            this.tabVersement.Enter += new System.EventHandler(this.tabVersement_Enter);
            // 
            // cbxVeChoixCompte
            // 
            this.cbxVeChoixCompte.FormattingEnabled = true;
            this.cbxVeChoixCompte.Location = new System.Drawing.Point(376, 88);
            this.cbxVeChoixCompte.Name = "cbxVeChoixCompte";
            this.cbxVeChoixCompte.Size = new System.Drawing.Size(292, 24);
            this.cbxVeChoixCompte.TabIndex = 18;
            // 
            // label17
            // 
            this.label17.AutoSize = true;
            this.label17.Location = new System.Drawing.Point(503, 153);
            this.label17.Name = "label17";
            this.label17.Size = new System.Drawing.Size(14, 16);
            this.label17.TabIndex = 17;
            this.label17.Text = "€";
            // 
            // labVeValide
            // 
            this.labVeValide.AutoSize = true;
            this.labVeValide.Location = new System.Drawing.Point(131, 235);
            this.labVeValide.Name = "labVeValide";
            this.labVeValide.Size = new System.Drawing.Size(0, 16);
            this.labVeValide.TabIndex = 7;
            // 
            // label16
            // 
            this.label16.AutoSize = true;
            this.label16.Location = new System.Drawing.Point(150, 153);
            this.label16.Name = "label16";
            this.label16.Size = new System.Drawing.Size(115, 16);
            this.label16.TabIndex = 6;
            this.label16.Text = "Montant a créditez";
            // 
            // label15
            // 
            this.label15.AutoSize = true;
            this.label15.Location = new System.Drawing.Point(150, 97);
            this.label15.Name = "label15";
            this.label15.Size = new System.Drawing.Size(172, 16);
            this.label15.TabIndex = 5;
            this.label15.Text = "Choisir un compte a créditer";
            // 
            // label14
            // 
            this.label14.AutoSize = true;
            this.label14.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label14.Location = new System.Drawing.Point(100, 28);
            this.label14.Name = "label14";
            this.label14.Size = new System.Drawing.Size(517, 31);
            this.label14.TabIndex = 4;
            this.label14.Text = "ENREGISTREMENT D\'UN VERSEMENT";
            // 
            // txtVeMontant
            // 
            this.txtVeMontant.Location = new System.Drawing.Point(376, 147);
            this.txtVeMontant.Name = "txtVeMontant";
            this.txtVeMontant.Size = new System.Drawing.Size(121, 22);
            this.txtVeMontant.TabIndex = 3;
            // 
            // btnVeAnnuler
            // 
            this.btnVeAnnuler.Location = new System.Drawing.Point(593, 351);
            this.btnVeAnnuler.Name = "btnVeAnnuler";
            this.btnVeAnnuler.Size = new System.Drawing.Size(75, 23);
            this.btnVeAnnuler.TabIndex = 1;
            this.btnVeAnnuler.Text = "Annuler";
            this.btnVeAnnuler.UseVisualStyleBackColor = true;
            this.btnVeAnnuler.Click += new System.EventHandler(this.btnVeAnnuler_Click);
            // 
            // btnVeEnregister
            // 
            this.btnVeEnregister.Location = new System.Drawing.Point(473, 351);
            this.btnVeEnregister.Name = "btnVeEnregister";
            this.btnVeEnregister.Size = new System.Drawing.Size(79, 23);
            this.btnVeEnregister.TabIndex = 0;
            this.btnVeEnregister.Text = "Enregister";
            this.btnVeEnregister.UseVisualStyleBackColor = true;
            this.btnVeEnregister.Click += new System.EventHandler(this.btnVeEnregister_Click);
            // 
            // tabRetrait
            // 
            this.tabRetrait.Controls.Add(this.cbxReChoixCompte);
            this.tabRetrait.Controls.Add(this.label22);
            this.tabRetrait.Controls.Add(this.labReValide);
            this.tabRetrait.Controls.Add(this.label19);
            this.tabRetrait.Controls.Add(this.label20);
            this.tabRetrait.Controls.Add(this.label21);
            this.tabRetrait.Controls.Add(this.txtReMontant);
            this.tabRetrait.Controls.Add(this.brnREAnnuler);
            this.tabRetrait.Controls.Add(this.brnReEnregistrer);
            this.tabRetrait.Location = new System.Drawing.Point(4, 25);
            this.tabRetrait.Margin = new System.Windows.Forms.Padding(4);
            this.tabRetrait.Name = "tabRetrait";
            this.tabRetrait.Size = new System.Drawing.Size(828, 399);
            this.tabRetrait.TabIndex = 4;
            this.tabRetrait.Text = "Retrait";
            this.tabRetrait.UseVisualStyleBackColor = true;
            this.tabRetrait.Enter += new System.EventHandler(this.tabRetrait_Enter);
            // 
            // cbxReChoixCompte
            // 
            this.cbxReChoixCompte.FormattingEnabled = true;
            this.cbxReChoixCompte.Location = new System.Drawing.Point(389, 94);
            this.cbxReChoixCompte.Name = "cbxReChoixCompte";
            this.cbxReChoixCompte.Size = new System.Drawing.Size(292, 24);
            this.cbxReChoixCompte.TabIndex = 17;
            // 
            // label22
            // 
            this.label22.AutoSize = true;
            this.label22.Location = new System.Drawing.Point(496, 158);
            this.label22.Name = "label22";
            this.label22.Size = new System.Drawing.Size(14, 16);
            this.label22.TabIndex = 16;
            this.label22.Text = "€";
            // 
            // labReValide
            // 
            this.labReValide.AutoSize = true;
            this.labReValide.Location = new System.Drawing.Point(144, 241);
            this.labReValide.Name = "labReValide";
            this.labReValide.Size = new System.Drawing.Size(0, 16);
            this.labReValide.TabIndex = 15;
            // 
            // label19
            // 
            this.label19.AutoSize = true;
            this.label19.Location = new System.Drawing.Point(163, 159);
            this.label19.Name = "label19";
            this.label19.Size = new System.Drawing.Size(110, 16);
            this.label19.TabIndex = 14;
            this.label19.Text = "Montant a débiter";
            // 
            // label20
            // 
            this.label20.AutoSize = true;
            this.label20.Location = new System.Drawing.Point(163, 103);
            this.label20.Name = "label20";
            this.label20.Size = new System.Drawing.Size(113, 16);
            this.label20.TabIndex = 13;
            this.label20.Text = "Choisir un compte";
            // 
            // label21
            // 
            this.label21.AutoSize = true;
            this.label21.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label21.Location = new System.Drawing.Point(113, 34);
            this.label21.Name = "label21";
            this.label21.Size = new System.Drawing.Size(466, 31);
            this.label21.TabIndex = 12;
            this.label21.Text = "ENREGISTREMENT D\'UN RETRAIT";
            // 
            // txtReMontant
            // 
            this.txtReMontant.Location = new System.Drawing.Point(389, 153);
            this.txtReMontant.Name = "txtReMontant";
            this.txtReMontant.Size = new System.Drawing.Size(100, 22);
            this.txtReMontant.TabIndex = 11;
            // 
            // brnREAnnuler
            // 
            this.brnREAnnuler.Location = new System.Drawing.Point(606, 357);
            this.brnREAnnuler.Name = "brnREAnnuler";
            this.brnREAnnuler.Size = new System.Drawing.Size(75, 23);
            this.brnREAnnuler.TabIndex = 9;
            this.brnREAnnuler.Text = "Annuler";
            this.brnREAnnuler.UseVisualStyleBackColor = true;
            this.brnREAnnuler.Click += new System.EventHandler(this.brnREAnnuler_Click);
            // 
            // brnReEnregistrer
            // 
            this.brnReEnregistrer.Location = new System.Drawing.Point(486, 357);
            this.brnReEnregistrer.Name = "brnReEnregistrer";
            this.brnReEnregistrer.Size = new System.Drawing.Size(79, 23);
            this.brnReEnregistrer.TabIndex = 8;
            this.brnReEnregistrer.Text = "Enregister";
            this.brnReEnregistrer.UseVisualStyleBackColor = true;
            this.brnReEnregistrer.Click += new System.EventHandler(this.brnReEnregistrer_Click);
            // 
            // tabVirement
            // 
            this.tabVirement.Controls.Add(this.cbxViChoixCompteCr);
            this.tabVirement.Controls.Add(this.cbxViChoixCompteDe);
            this.tabVirement.Controls.Add(this.label28);
            this.tabVirement.Controls.Add(this.label23);
            this.tabVirement.Controls.Add(this.labViValide);
            this.tabVirement.Controls.Add(this.label25);
            this.tabVirement.Controls.Add(this.label26);
            this.tabVirement.Controls.Add(this.label27);
            this.tabVirement.Controls.Add(this.txtViMontant);
            this.tabVirement.Controls.Add(this.btnViAnnuler);
            this.tabVirement.Controls.Add(this.btnViEnregister);
            this.tabVirement.Location = new System.Drawing.Point(4, 25);
            this.tabVirement.Margin = new System.Windows.Forms.Padding(4);
            this.tabVirement.Name = "tabVirement";
            this.tabVirement.Size = new System.Drawing.Size(828, 399);
            this.tabVirement.TabIndex = 5;
            this.tabVirement.Text = "Virement";
            this.tabVirement.UseVisualStyleBackColor = true;
            this.tabVirement.Enter += new System.EventHandler(this.tabVirement_Enter);
            // 
            // cbxViChoixCompteCr
            // 
            this.cbxViChoixCompteCr.FormattingEnabled = true;
            this.cbxViChoixCompteCr.Location = new System.Drawing.Point(388, 147);
            this.cbxViChoixCompteCr.Name = "cbxViChoixCompteCr";
            this.cbxViChoixCompteCr.Size = new System.Drawing.Size(292, 24);
            this.cbxViChoixCompteCr.TabIndex = 28;
            // 
            // cbxViChoixCompteDe
            // 
            this.cbxViChoixCompteDe.FormattingEnabled = true;
            this.cbxViChoixCompteDe.Location = new System.Drawing.Point(388, 101);
            this.cbxViChoixCompteDe.Name = "cbxViChoixCompteDe";
            this.cbxViChoixCompteDe.Size = new System.Drawing.Size(292, 24);
            this.cbxViChoixCompteDe.TabIndex = 27;
            // 
            // label28
            // 
            this.label28.AutoSize = true;
            this.label28.Location = new System.Drawing.Point(165, 147);
            this.label28.Name = "label28";
            this.label28.Size = new System.Drawing.Size(172, 16);
            this.label28.TabIndex = 26;
            this.label28.Text = "Choisir un compte à créditer";
            // 
            // label23
            // 
            this.label23.AutoSize = true;
            this.label23.Location = new System.Drawing.Point(494, 198);
            this.label23.Name = "label23";
            this.label23.Size = new System.Drawing.Size(14, 16);
            this.label23.TabIndex = 25;
            this.label23.Text = "€";
            // 
            // labViValide
            // 
            this.labViValide.AutoSize = true;
            this.labViValide.Location = new System.Drawing.Point(162, 252);
            this.labViValide.Name = "labViValide";
            this.labViValide.Size = new System.Drawing.Size(0, 16);
            this.labViValide.TabIndex = 24;
            // 
            // label25
            // 
            this.label25.AutoSize = true;
            this.label25.Location = new System.Drawing.Point(162, 198);
            this.label25.Name = "label25";
            this.label25.Size = new System.Drawing.Size(110, 16);
            this.label25.TabIndex = 23;
            this.label25.Text = "Montant a débiter";
            // 
            // label26
            // 
            this.label26.AutoSize = true;
            this.label26.Location = new System.Drawing.Point(162, 101);
            this.label26.Name = "label26";
            this.label26.Size = new System.Drawing.Size(169, 16);
            this.label26.TabIndex = 22;
            this.label26.Text = "Choisir un compte a débiter";
            // 
            // label27
            // 
            this.label27.AutoSize = true;
            this.label27.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label27.Location = new System.Drawing.Point(112, 32);
            this.label27.Name = "label27";
            this.label27.Size = new System.Drawing.Size(489, 31);
            this.label27.TabIndex = 21;
            this.label27.Text = "ENREGISTREMENT D\'UN VIREMENT";
            // 
            // txtViMontant
            // 
            this.txtViMontant.Location = new System.Drawing.Point(388, 198);
            this.txtViMontant.Name = "txtViMontant";
            this.txtViMontant.Size = new System.Drawing.Size(100, 22);
            this.txtViMontant.TabIndex = 20;
            // 
            // btnViAnnuler
            // 
            this.btnViAnnuler.Location = new System.Drawing.Point(605, 355);
            this.btnViAnnuler.Name = "btnViAnnuler";
            this.btnViAnnuler.Size = new System.Drawing.Size(75, 23);
            this.btnViAnnuler.TabIndex = 18;
            this.btnViAnnuler.Text = "Annuler";
            this.btnViAnnuler.UseVisualStyleBackColor = true;
            this.btnViAnnuler.Click += new System.EventHandler(this.btnViAnnuler_Click);
            // 
            // btnViEnregister
            // 
            this.btnViEnregister.Location = new System.Drawing.Point(485, 355);
            this.btnViEnregister.Name = "btnViEnregister";
            this.btnViEnregister.Size = new System.Drawing.Size(79, 23);
            this.btnViEnregister.TabIndex = 17;
            this.btnViEnregister.Text = "Enregister";
            this.btnViEnregister.UseVisualStyleBackColor = true;
            this.btnViEnregister.Click += new System.EventHandler(this.btnViEnregister_Click);
            // 
            // FrmBanque
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(836, 428);
            this.Controls.Add(this.tabControl1);
            this.Margin = new System.Windows.Forms.Padding(4);
            this.Name = "FrmBanque";
            this.Text = "Form1";
            this.tabControl1.ResumeLayout(false);
            this.tabAccueil.ResumeLayout(false);
            this.tabAccueil.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dgvListeComptes)).EndInit();
            this.tabConsultation.ResumeLayout(false);
            this.tabConsultation.PerformLayout();
            this.tabCreation.ResumeLayout(false);
            this.tabCreation.PerformLayout();
            this.tabVersement.ResumeLayout(false);
            this.tabVersement.PerformLayout();
            this.tabRetrait.ResumeLayout(false);
            this.tabRetrait.PerformLayout();
            this.tabVirement.ResumeLayout(false);
            this.tabVirement.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.TabControl tabControl1;
        private System.Windows.Forms.TabPage tabAccueil;
        private System.Windows.Forms.TabPage tabConsultation;
        private System.Windows.Forms.TabPage tabCreation;
        private System.Windows.Forms.TabPage tabVersement;
        private System.Windows.Forms.TabPage tabRetrait;
        private System.Windows.Forms.TabPage tabVirement;
        private System.Windows.Forms.DataGridView dgvListeComptes;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label lblAcTitre;
        private System.Windows.Forms.TextBox txtCoSoldeActuel;
        private System.Windows.Forms.TextBox txtCoTitulaire;
        private System.Windows.Forms.TextBox txtCoNumero;
        private System.Windows.Forms.ComboBox cbxCoChoixCompte;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label12;
        private System.Windows.Forms.Label labCrValide;
        private System.Windows.Forms.Label label10;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Button btnCrAnnuler;
        private System.Windows.Forms.Button btnCrCreer;
        private System.Windows.Forms.TextBox txtCrSold;
        private System.Windows.Forms.TextBox txtCrTitulaire;
        private System.Windows.Forms.TextBox txtCrNumero;
        private System.Windows.Forms.Label label13;
        private System.Windows.Forms.Label labVeValide;
        private System.Windows.Forms.Label label16;
        private System.Windows.Forms.Label label15;
        private System.Windows.Forms.Label label14;
        private System.Windows.Forms.TextBox txtVeMontant;
        private System.Windows.Forms.Button btnVeAnnuler;
        private System.Windows.Forms.Button btnVeEnregister;
        private System.Windows.Forms.Label label22;
        private System.Windows.Forms.Label labReValide;
        private System.Windows.Forms.Label label19;
        private System.Windows.Forms.Label label20;
        private System.Windows.Forms.Label label21;
        private System.Windows.Forms.TextBox txtReMontant;
        private System.Windows.Forms.Button brnREAnnuler;
        private System.Windows.Forms.Button brnReEnregistrer;
        private System.Windows.Forms.Label label28;
        private System.Windows.Forms.Label label23;
        private System.Windows.Forms.Label labViValide;
        private System.Windows.Forms.Label label25;
        private System.Windows.Forms.Label label26;
        private System.Windows.Forms.Label label27;
        private System.Windows.Forms.TextBox txtViMontant;
        private System.Windows.Forms.Button btnViAnnuler;
        private System.Windows.Forms.Button btnViEnregister;
        private System.Windows.Forms.Label label17;
        private System.Windows.Forms.ComboBox cbxVeChoixCompte;
        private System.Windows.Forms.ComboBox cbxReChoixCompte;
        private System.Windows.Forms.ComboBox cbxViChoixCompteCr;
        private System.Windows.Forms.ComboBox cbxViChoixCompteDe;
    }
}

