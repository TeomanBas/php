<form action="22-1_FormDegerlendirme-GET.php" method="GET" name="KisiselBilgiler">
    <table border="1px">
        <tr>
            <td>Ad</td>
            <td><input type="text" name="Ad" required></td>
        </tr>
        <tr>
            <td>Soyad</td>
            <td><input type="text" name="Soyad" required></td>
        </tr>
        <tr>
            <td>Parola</td>
            <td><input type="password" name="Parola" minlength="8" maxlength="16"></td>
        </tr>
        <tr>
            <td>Tek Seçim</td>
            <td><label>Tek Seçim 1</label><input type="radio" name="r_secim" value="secim_1" checked></td>
            <td><label>Tek Seçim 2</label><input type="radio" name="r_secim" value="secim_2"></td>
            <td><label>Tek Seçim 3</label><input type="radio" name="r_secim" value="secim_3"></td>
        </tr>
        <tr>
            <td>Çoklu Seçim</td>
            <td><label>Çoklu Seçim 1</label><input type="checkbox" name="c_secim1" value="secim_1"></td>
            <td><label>Çoklu Seçim 2</label><input type="checkbox" name="c_secim2" value="secim_2"></td>
            <td><label>Çoklu Seçim 3</label><input type="checkbox" name="c_secim3" value="secim_3"></td>
        </tr>
        <tr>
            <td> Şehir Seçim</td>
            <td height="100px" weigth="100px">
                <select name="Sehir" multiple >
                    <option>Ankara</option>
                    <option>İstanbul</option>
                    <option>İzmir</option>
                    <option>Bursa</option>
                    <option>Antalya</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Renk</td>
            <td><input type="color" name="Renk"></td>
        </tr>
        <tr>
            <td>E-Posta</td>
            <td><input type="email" name="Eposta" required></td>
        </tr>
        <tr>
            <td>Tarih</td>
            <td><input type="date" name="Tarih"></td>
        </tr>
        <tr>
            <td>Mesaj</td>
            <td><textarea type="text" name="Mesaj" rows="5" cols="50" maxlength="200" ></textarea></td>
            

        </tr>
    </table>
    <input value="Gönder" name="FormGonder" type="submit" >
    <input value="Temizle" name="Temizle" type="reset" >
</form>