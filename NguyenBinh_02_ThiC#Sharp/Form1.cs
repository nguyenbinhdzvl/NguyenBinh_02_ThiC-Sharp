using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace NguyenBinh_02_ThiC_Sharp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
           
        }

        private void label1_Click(object sender, EventArgs e)
        {
           

        }

        private void label1_Click_1(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {
            string HoTen = " Nguyễn Bính";
            string mssv = "412323423";
            string monthi = "Lập Trình";
            lblinfo.Text = "Họ Tên :" + HoTen;
            lblinfo.Text += "\nmã Sinh viên :" + mssv;
            lblinfo.Text += "\nNgày thi: " + System.DateTime.Now.ToString();
            lblinfo.Text += "\nMôn thi: :" + monthi;

        }

        private void đăngKýMônHọcToolStripMenuItem_Click(object sender, EventArgs e)
        {
            DangKyMOnHoc gtp = new DangKyMOnHoc();
            gtp.Show();
        }

        private void giớiThiệuToolStripMenuItem_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Xin Chào Bạn Nhé ");
        }

        private void cậpNhậpToolStripMenuItem_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Chua Co Ban cap Cap Nhap ");
        }

        private void giảiPhươngTrìnhBậc2ToolStripMenuItem_Click(object sender, EventArgs e)
        {
            PT2 gtp = new PT2();
            gtp.Show();
        }

        private void thoátToolStripMenuItem_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
