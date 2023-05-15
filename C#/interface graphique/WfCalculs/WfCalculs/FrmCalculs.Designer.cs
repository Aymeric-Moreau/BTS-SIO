namespace WfCalculs
{
    partial class FrmCalculs
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
            this.buttonAddition = new System.Windows.Forms.Button();
            this.buttonMultiplication = new System.Windows.Forms.Button();
            this.textValeur1 = new System.Windows.Forms.TextBox();
            this.textValeur2 = new System.Windows.Forms.TextBox();
            this.textResult = new System.Windows.Forms.TextBox();
            this.ldlOperation = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.btnQuitter = new System.Windows.Forms.Button();
            this.btnEffacer = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // buttonAddition
            // 
            this.buttonAddition.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.buttonAddition.Location = new System.Drawing.Point(176, 47);
            this.buttonAddition.Name = "buttonAddition";
            this.buttonAddition.Size = new System.Drawing.Size(45, 45);
            this.buttonAddition.TabIndex = 0;
            this.buttonAddition.Text = "+";
            this.buttonAddition.UseVisualStyleBackColor = true;
            this.buttonAddition.Click += new System.EventHandler(this.button1_Click);
            // 
            // buttonMultiplication
            // 
            this.buttonMultiplication.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.buttonMultiplication.Location = new System.Drawing.Point(176, 104);
            this.buttonMultiplication.Name = "buttonMultiplication";
            this.buttonMultiplication.Size = new System.Drawing.Size(45, 45);
            this.buttonMultiplication.TabIndex = 1;
            this.buttonMultiplication.Text = "*";
            this.buttonMultiplication.UseVisualStyleBackColor = true;
            this.buttonMultiplication.Click += new System.EventHandler(this.buttonMultiplication_Click);
            // 
            // textValeur1
            // 
            this.textValeur1.Location = new System.Drawing.Point(60, 32);
            this.textValeur1.Name = "textValeur1";
            this.textValeur1.Size = new System.Drawing.Size(100, 22);
            this.textValeur1.TabIndex = 4;
            this.textValeur1.TextAlign = System.Windows.Forms.HorizontalAlignment.Right;
            this.textValeur1.TextChanged += new System.EventHandler(this.textValeur1_TextChanged);
            // 
            // textValeur2
            // 
            this.textValeur2.Location = new System.Drawing.Point(60, 70);
            this.textValeur2.Name = "textValeur2";
            this.textValeur2.Size = new System.Drawing.Size(100, 22);
            this.textValeur2.TabIndex = 5;
            this.textValeur2.TextAlign = System.Windows.Forms.HorizontalAlignment.Right;
            this.textValeur2.TextChanged += new System.EventHandler(this.textValeur2_TextChanged);
            // 
            // textResult
            // 
            this.textResult.Enabled = false;
            this.textResult.Location = new System.Drawing.Point(60, 127);
            this.textResult.Name = "textResult";
            this.textResult.Size = new System.Drawing.Size(100, 22);
            this.textResult.TabIndex = 6;
            this.textResult.TextAlign = System.Windows.Forms.HorizontalAlignment.Right;
            // 
            // ldlOperation
            // 
            this.ldlOperation.Font = new System.Drawing.Font("Microsoft New Tai Lue", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ldlOperation.Location = new System.Drawing.Point(12, 64);
            this.ldlOperation.Name = "ldlOperation";
            this.ldlOperation.Size = new System.Drawing.Size(28, 28);
            this.ldlOperation.TabIndex = 7;
            this.ldlOperation.Click += new System.EventHandler(this.label1_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(276, 291);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(10, 16);
            this.label2.TabIndex = 8;
            this.label2.Text = " ";
            // 
            // label3
            // 
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(13, 121);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(28, 28);
            this.label3.TabIndex = 9;
            this.label3.Text = "=";
            // 
            // btnQuitter
            // 
            this.btnQuitter.Image = global::WfCalculs.Properties.Resources.deconnexion;
            this.btnQuitter.Location = new System.Drawing.Point(240, 104);
            this.btnQuitter.Name = "btnQuitter";
            this.btnQuitter.Size = new System.Drawing.Size(45, 45);
            this.btnQuitter.TabIndex = 3;
            this.btnQuitter.UseVisualStyleBackColor = true;
            this.btnQuitter.Click += new System.EventHandler(this.btnQuitter_Click);
            // 
            // btnEffacer
            // 
            this.btnEffacer.Image = global::WfCalculs.Properties.Resources.gomme;
            this.btnEffacer.Location = new System.Drawing.Point(240, 47);
            this.btnEffacer.Name = "btnEffacer";
            this.btnEffacer.Size = new System.Drawing.Size(45, 45);
            this.btnEffacer.TabIndex = 2;
            this.btnEffacer.UseVisualStyleBackColor = true;
            this.btnEffacer.Click += new System.EventHandler(this.btnEffacer_Click);
            // 
            // FrmCalculs
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(322, 193);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.ldlOperation);
            this.Controls.Add(this.textResult);
            this.Controls.Add(this.textValeur2);
            this.Controls.Add(this.textValeur1);
            this.Controls.Add(this.btnQuitter);
            this.Controls.Add(this.btnEffacer);
            this.Controls.Add(this.buttonMultiplication);
            this.Controls.Add(this.buttonAddition);
            this.Name = "FrmCalculs";
            this.Text = "Operation";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button buttonAddition;
        private System.Windows.Forms.Button buttonMultiplication;
        private System.Windows.Forms.Button btnEffacer;
        private System.Windows.Forms.Button btnQuitter;
        private System.Windows.Forms.TextBox textValeur1;
        private System.Windows.Forms.TextBox textValeur2;
        private System.Windows.Forms.TextBox textResult;
        private System.Windows.Forms.Label ldlOperation;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
    }
}

