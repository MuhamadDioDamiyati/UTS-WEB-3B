
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pendaftaran">
                <table border="5" cellpadding="20px">
				  <p>PENDAFTARAN</p>
                  <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
                  <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat" size="30"></td></tr>
                  <tr><td>Tanggal Lahir</td><td>:</td>
                    <td>
                      <select name="tanggal">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      <select name="bulan">
                        <option value="Januari">01</option>
                        <option value="Februari">02</option>
                        <option value="Maret">03</option>
                        <option value="April">04</option>
                        <option value="Mei">05</option>
                        <option value="Juni">06</option>
                        <option value="Juli">07</option>
                        <option value="Agustus">08</option>
                        <option value="September">09</option>
                        <option value="Oktober">10</option>
                        <option value="November">11</option>
                        <option value="Desember">12</option>
                      </select>
                      <select name="tahun">
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                      </select>
                    </td>
                  </tr>
                  <tr><td>Alamat Rumah</td><td>:</td><td><textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
                  <tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex" value="Laki-laki">Laki-laki<input type="radio" name="sex" value="Perempuan">Perempuan</td></tr>
                  <tr><td>Sekolah Asal</td><td>:</td><td><input type="text" name="sekolah" size="30"></td></tr>
                  <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilai" size="30"></td></tr>
                </table>
                <input type="reset" name="reset" value="Hapus"><input type="submit" name="submit" value="Submit">
            </form>
            