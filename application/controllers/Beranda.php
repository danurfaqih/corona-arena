<?php 
class Beranda extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('Reservasi_model');
        $this->load->library('upload');
    }

    public function index()
{
    $data['jumlah_lapangan'] = $this->Reservasi_model->get_alldata()->num_rows();
    $data['jumlah_customer'] = $this->Reservasi_model->get_datamember()->num_rows();
    $data['jumlah_reservasi'] = $this->Reservasi_model->get_datareservasi()->num_rows();

    $this->load->view("template2/head");
    $this->load->view("template2/sidebar");
    $this->load->view("template2/navbar", $data); // Mengirim data ke navbar
    $this->load->view("template2/content", $data); // Mengirim data ke content
    $this->load->view("template2/footer");
}


    public function lapangan()
	{
        $data['tb_lapangan'] = $this->Reservasi_model->get_alldata()->result();
        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view('vlapangan', $data);
        $this->load->view("template2/footer");
    }

    public function add_lapangan()
    {
        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view('add_lapangan');
        $this->load->view("template2/footer");
    }

    public function simpan_lapangan() 
    {
        // Validasi harga tidak boleh 0 atau kurang dari 0
        $harga_lapangan = $this->input->post('harga_lapangan');
            if ($harga_lapangan <= 0) {
        echo 'Harga lapangan harus lebih dari 0.';
        return;
        }
        $config['upload_path'] = './assets2/gambargor/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 5120;

        $this->upload->initialize($config); 

        $data = array(
            'nama_lapangan' => $this->input->post('nama_lapangan', true),
            'jenis_lapangan' => $this->input->post('jenis_lapangan', true),
            'deskripsi_lapangan' => $this->input->post('deskripsi_lapangan', true),
            'harga_lapangan' => $this->input->post('harga_lapangan', true), 
        );

        if ($this->upload->do_upload('foto_lapangan')) {
            $data['foto_lapangan'] = $this->upload->data('file_name');
        } else {
            $error = $this->upload->display_errors();
            echo $error;
            return;
        }

        $insert = $this->Reservasi_model->simpan('tb_lapangan', $data);
        if ($insert > 0) {
            redirect('beranda/lapangan');
        } else {
            echo 'Gagal Disimpan';
        }
    }

    public function del_lapangan($id_lapangan)
    {
        // Memeriksa apakah lapangan masih terkait dengan reservasi
        if ($this->Reservasi_model->lapangan_relasi_reservasi($id_lapangan)) {
            echo "Lapangan masih terkait dengan reservasi, tidak dapat dihapus.";
            return;
        }

        // Jika tidak ada reservasi yang terkait, hapus lapangan
        $this->Reservasi_model->fmDelete($id_lapangan);
        redirect('beranda/lapangan');
    }

    public function edit_lapangan($id_lapangan)
    {
        $where=array ('id_lapangan' => $id_lapangan);
        // Ambil data produk berdasarkan id
        $data['tb_lapangan'] = $this->Reservasi_model->fmEdit($where, 'tb_lapangan')->result();

        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view("edit_lapangan", $data);
        $this->load->view("template2/footer");
    }

    public function update_lapangan()
    {
        // Konfigurasi upload gambar
        $config['upload_path'] = './assets2/gambargor/';  
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size'] = 13000;

        // Inisialisasi library upload
        $this->load->library('upload', $config);

        // Tangkap data dari form
        $id_lapangan = $this->input->post('idlapangan');
        $nama = $this->input->post('nama_lapangan');
        $des = $this->input->post('deskripsi_lapangan');
        $harga = $this->input->post('harga_lapangan');
        $jenis = $this->input->post('jenis_lapangan');

        // Cek apakah ada file gambar yang diunggah
        if (!empty($_FILES['foto_lapangan']['name'])) {
            // Jika ada, lakukan proses upload
            if (!$this->upload->do_upload('foto_lapangan')) {
                // Jika gagal upload, tampilkan pesan error
                $error = $this->upload->display_errors();
                echo $error;
                return;
            } else {
                // Jika berhasil upload, ambil nama file gambar baru
                $file = $this->upload->data();
                $gambar = $file['file_name'];

                // Siapkan data untuk disimpan ke database
                $data = array(
                    'nama_lapangan' => $nama,
                    'deskripsi_lapangan' => $des,
                    'harga_lapangan' => $harga,
                    'jenis_lapangan' => $jenis,
                    'foto_lapangan' => $gambar
                );
            }
        } else {
            $data = array(
                'nama_lapangan' => $nama,
                'deskripsi_lapangan' => $des,
                'harga_lapangan' => $harga,
                'jenis_lapangan' => $jenis
            );
        }

        // Siapkan kondisi untuk update
        $where = array('id_lapangan' => $id_lapangan);
        // Panggil model untuk melakukan update data
        $this->Reservasi_model->fmUpdate($where, $data, 'tb_lapangan');
        redirect('beranda/lapangan');
    }

    public function customer()
	{
        $data['tb_member'] = $this->Reservasi_model->get_datamember()->result();
        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view('vmember', $data);
        $this->load->view("template2/footer");
    }

    public function add_member()
    {
        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view('add_member');
        $this->load->view("template2/footer");
    }

    public function simpan_member()
    {
        $nama_member = $this->input->post('nama_member');
        $email_member = $this->input->post('email_member');
        $tlp_member = $this->input->post('tlp_member');
        $status_member = $this->input->post('status_member');

        // Siapkan data untuk disimpan ke database
        $data = array(
            'nama_member' => $nama_member,
            'email_member' => $email_member,
            'tlp_member' => $tlp_member,
            'status_member' => $status_member
        );

        $insert = $this->Reservasi_model->simpan('tb_member', $data);

        if ($insert > 0) {
            redirect('beranda/customer');
        } else {
            echo 'Gagal Disimpan';
        }
    }

    public function del_member($id_member)
    {
        // Memeriksa apakah member masih terkait dengan reservasi
        if ($this->Reservasi_model->member_relasi_reservasi($id_member)) {
            echo "Member masih terkait dengan reservasi, tidak dapat dihapus.";
            return;
        }

        // Jika tidak ada reservasi yang terkait, hapus member
        $this->Reservasi_model->fmDeleteMember($id_member);
        redirect('beranda/customer');
    }

    public function edit_member($id_member)
    {
        $where=array ('id_member' => $id_member);
        // Ambil data produk berdasarkan id
        $data['tb_member'] = $this->Reservasi_model->fmEdit($where, 'tb_member')->result();

        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view("edit_member", $data);
        $this->load->view("template2/footer");
    }

    public function update_member()
    {
        // Tangkap data dari form
        $id_member = $this->input->post('id_member');
        $nama_member = $this->input->post('nama_member');
        $email_member = $this->input->post('email_member');
        $tlp_member = $this->input->post('tlp_member');
        $status_member = $this->input->post('status_member');

        // Siapkan data untuk disimpan ke database
        $data = array(
            'nama_member' => $nama_member,
            'email_member' => $email_member,
            'tlp_member' => $tlp_member,
            'status_member' => $status_member
        );

        // Panggil model untuk melakukan update data
        $where = array('id_member' => $id_member);
        $update = $this->Reservasi_model->fmUpdate($where, $data, 'tb_member');
        redirect('beranda/customer');
    }

    public function reservasi()
	{
        $data['tb_reservasi'] = $this->Reservasi_model->get_datareservasi_with_names();
        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view('vreservasi', $data);
        $this->load->view("template2/footer");
    }

    public function add_reservasi()
    {
        $data['tb_member'] = $this->Reservasi_model->get_datamember()->result();
        $data['tb_lapangan'] = $this->Reservasi_model->get_alldata()->result();
        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view('add_reservasi', $data); 
        $this->load->view("template2/footer");
    }

    public function simpan_reservasi() 
    {
        $data['tb_reservasi'] = $this->Reservasi_model->get_datareservasi_with_names();
        $tanggal = $this->input->post('tanggal');
        $id_member = $this->input->post('customer'); 
        $id_lapangan = $this->input->post('lapangan');
        $durasi_main = $this->input->post('durasi_main');
        $waktu = $this->input->post('waktu');
    
        // Validasi durasi main tidak boleh 0 atau kurang dari 0
        $durasi_main = $this->input->post('durasi_main');
            if ($durasi_main <= 0) {
                echo 'Durasi main tidak boleh <= 0.';
            return;
        }
    
        // Siapkan data untuk disimpan ke database
        $data = array(
            'tgl_reservasi' => $tanggal,
            'member_reservasi' => $id_member,
            'lapangan_reservasi' => $id_lapangan,
            'durasi_reservasi' => $durasi_main,
            'waktu_reservasi' => $waktu
        );
    
        $insert = $this->Reservasi_model->simpan('tb_reservasi', $data);
    
        if ($insert > 0) {
            redirect('beranda/reservasi');
        } else {
            echo 'Gagal Disimpan';
        }
    }

    public function del_reservasi($id_reservasi)
    {
        $this->Reservasi_model->fmDeleteReservasi($id_reservasi);
        redirect('beranda/reservasi');
    }

    public function  edit_reservasi($id_reservasi)
    {
        $where=array ('id_reservasi' => $id_reservasi);
        // Ambil data produk berdasarkan id
        $data['tb_reservasi'] = $this->Reservasi_model->fmEdit($where, 'tb_reservasi')->result();
        // Ambil data member
        $data['tb_member'] = $this->Reservasi_model->get_datamember()->result();
        // Ambil data lapangan
        $data['tb_lapangan'] = $this->Reservasi_model->get_alldata()->result();

        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view("edit_reservasi", $data);
        $this->load->view("template2/footer");
    }

    public function update_reservasi()
    {
        // Validasi durasi main tidak boleh 0 atau kurang dari 0
        $durasi_main = $this->input->post('durasi_main');
            if ($durasi_main <= 0) {
                echo 'Durasi main tidak boleh <= 0.';
            return;
        }
        $id_reservasi = $this->input->post('id_reservasi');
        $tanggal = $this->input->post('tanggal');
        $durasi_main = $this->input->post('durasi_main');
        $waktu = $this->input->post('waktu');
        $id_member = $this->input->post('customer');
        $id_lapangan = $this->input->post('lapangan');
    
        // Siapkan data untuk disimpan ke database
        $data = array(
            'tgl_reservasi' => $tanggal,
            'member_reservasi' => $id_member,
            'lapangan_reservasi' => $id_lapangan,
            'durasi_reservasi' => $durasi_main,
            'waktu_reservasi' => $waktu
        );
    
        // Panggil model untuk melakukan update data
        $where = array('id_reservasi' => $id_reservasi);
        $this->Reservasi_model->fmUpdate($where, $data, 'tb_reservasi');
        redirect('beranda/reservasi');
    }

    public function laporan()
    {
        // Periksa apakah ada filter tanggal yang dikirimkan
        $tgl_dari = $this->input->get('tgl_dari');
        $tgl_sampai = $this->input->get('tgl_sampai');

        if (!empty($tgl_dari) && !empty($tgl_sampai)) {
            // Ambil data reservasi berdasarkan rentang tanggal
            $data['tb_reservasi'] = $this->Reservasi_model->get_datareservasi_with_names_by_date($tgl_dari, $tgl_sampai);
        } else {
            // Jika tidak ada filter tanggal, ambil semua data reservasi
            $data['tb_reservasi'] = $this->Reservasi_model->get_datareservasi_with_names();
        }

        $this->load->view("template2/head");
        $this->load->view("template2/sidebar");
        $this->load->view("template2/navbar");
        $this->load->view('vlaporan', $data);
        $this->load->view("template2/footer");
    }
}
?>