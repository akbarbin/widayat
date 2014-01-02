<div class="container">
  <div class="content" role="main">
    <article class="post-item post-detail">
      <h1>Tentang Ir. H. Widayat</h1>          
      <div class="entry">
        <p><img src="<?php echo base_url(); ?>application/assets/images/temp/widayat-profile.jpg" width="400" height="500" alt="" class="frame_right"> Assalamualaikum Wr. Wb</p>
        <p>Puji dan syukur kita panjatkan kehadirat Allah SWT karena berkat rahmat dan karuniaNya pada kesempatan ini kami bisa memperkenalkan diri mudah - mudahan
          Allah SWT senantia meridhoi. Amin YRA
        </p>
        <p><strong>RIWAYAT DIRI:</strong> <br></p>
        <p><strong>Nama:</strong> Ir. H. Widayat</p>
        <p><strong>Tempat/Tanggal Lahir:</strong> Lumajang, 5 Desember 1957</p>
        <p><strong>Alamat:</strong> Jalan Buk Serang 107 Dusun Kedung Pakis Desa Pasirian Kabupaten Lumajang, Jawa Timur 473721</p>
        <p><strong>Status:</strong> Sudah Kawin</p>
        <p><strong>Anak:</strong> 4 Orang</p>
        <p><strong>Cucu:</strong> 1 Orang</p>
        <br>
        <p><strong>RIWAYAT PENDIDIKAN:</strong> <br></p>
        <p><strong>SDN: </strong> SDN Ledok Pasirian Lulus tahun 1970</p>
        <p><strong>SMP: </strong> SMP 1 Pasirian Lulus tahun 1973</p>
        <p><strong>SLTA: </strong> SPPMA Jember Lulus 1977</p>
        <p><strong>Sarjana: </strong> S1 Pertanian Universitas Moch. Seroedji Jember Lulus tahun 1991</p>
        <br>
        <p><strong>RIWAYAT PEKERJAAN:</strong> <br></p>
        <p><span class="text-red"><strong>1978 - 2013</strong></span><strong> - BUMN PT. Perkebunan Nusantara XII</strong><br>
          PTPN XII yang berkantor pusat di Jalan Rajawali 44 Surabaya. Jabatan terakhir adalah Wamen (Wakil Manajer) Kebun Banjarsari Jember.
          Daerah wilayah kerja yang dialami diantaranya:
        </p>
        <div class="styled_table table_red">
          <table>
            <thead>
              <tr>
                <th style="width:25%">Tahun</th>
                <th style="width:25%">Kebun</th>
                <th style="width:25%">Kabupaten</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1978 - 1983</td>
                <td>Kebun Gunung Gambir</td>
                <td>Jember</td>
              </tr>
              <tr class="odd">
                <td>1984 - 1990</td>
                <td>Kebun Banjarsari</td>
                <td>Jember</td>
              </tr>
              <tr>
                <td>1991 - 2000</td>
                <td>Gunung Gambir</td>
                <td>Jember</td>
              </tr>
              <tr>
                <td>2001 - 2004</td>
                <td>Kajaran</td>
                <td>Lumajang</td>
              </tr>
              <tr class="odd">
                <td>2005 - 2007</td>
                <td>Kaliwelang</td>
                <td>Lumajang</td>
              </tr>
              <tr>
                <td>2008 - 2010</td>
                <td>Jatirono</td>
                <td>Banyuwangi</td>
              </tr>
              <tr class="odd">
                <td>2010 - 2013</td>
                <td>Banjarsari</td>
                <td>Jember</td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>
        <p><strong>RIWAYAT POLITIK:</strong> <br></p>
        <p><span class="text-red"><strong>2002</strong></span><strong> - WAKIL KETUA PDIP DESA PASIRIAN</strong><br>
          Menjadi anggota dari sebuah partai PDIP dimulai dari tahun 2002 sebagai Wakil Ketua Desa Pasirian. Pengabdian didunia perkebunan sudah dijalani,
          sehingga sekarang ingin lebih mengabdikan ke masyarakat melalui pencalonan sebagai anggota Dewan Perwakilan Rakyat Daerah Kabupaten Lumajang tahun 2014.
        </p>
        <p><span class="text-red"><strong>2014</strong></span><strong> - CALON LEGISLATIF DPRD KAB. LUMAJANG</strong><br>
          Menjadi seorang calon Legislatif dari partai PDIP merupakan suatu kehormatan tersendiri bagi saya. Insyaallah kami akan bekerja karena rakyat Lumajang tercinta ini.
          Semoga dengan pengamalaman saya di dunia perkebunan bisa di aplikasikan di dunia politik. Menginggat dunia perkebunan merupakan inti dari sebuah permasalahan perekonomian.
          Ini mewujudkan itu semua perlu dukungan dari masyarakat tentunya. Saya ucapkan terimakasih kepada masyarakat Indonesia khususnya masyarakan Lumajang.
        </p>
        <h2 id="anchor2">Team Sukses Kami:</h2>
        <div class="styled_table table_red">
          <table>
            <thead>
              <tr>
                <th style="width:25%">Nama</th>
                <th style="width:25%">Kecamatan</th>
                <th style="width:25%">Jabatan</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($success_teams->num_rows > 0): ?>
                <?php foreach ($success_teams->result_array() as $success_teams): ?>
                  <tr>
                    <td><?php echo $success_teams['name'] ?></td>
                    <td><?php echo $success_teams['address'] ?></td>
                    <td><?php echo $success_teams['position'] ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>Team sukses masih belum di isi.</tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <p>Demikian yang bisa saya tuliskan tentang profil saya. Mohon maaf yang sebesar - besarnya jikalau ada tulisan saya yang kurang berkenan dihati Anda. Terimakasih.
        </p>
        <p>Wasalamualaikum Wr. Wb</p>
        <div class="clear"></div>
      </div>

    </article>            
  </div>
  <!--/ content -->
  <div class="clear"></div>
  <!--/ middle --> 
</div>
<!--/ container -->