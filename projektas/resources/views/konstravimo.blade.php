@extends('layouts.app')

@section('content')
    <h1>Konstravimas</h1>

    <button type="button"
            onclick="add()">
        Detalies pridėjimas.</button>

    <button type="button"
            onclick="remove()">
        Detalies pašalinimas.</button>

    <button type="button"
            onclick="find()">
        Detales paieška.</button>

    <button type="button"
            onclick="addU()">
        Užsakymo pridėjimas</button>

    <button type="button"
            onclick="filter()">
        Detalių filtravimas.</button>

    <button type="button"
            onclick="sort()">
        Detalių rikiavimas.</button>

    <button type="button"
            onclick="look()">
        Prekės apžiura.</button>


    <p id="text">
    <table id="items">
        <tr>
            <th>Pavadinimas</th>
            <th>Kaina</th>
            <th>Aprašymas</th>
            <th>Nuoroda</th>
            <th>Nuotrauka</th>
            <th>Gamintojas</th>
        </tr>
        <tr>
            <td>Samsung SSD</td>
            <td>62</td>
            <td>Good SSD - 2TB</td>
            <td><a href="https://www.amazon.com/Seagate-Portable-External-Hard-Drive/dp/B07CRG94G3?ref_=Oct_s9_apbd_otopr_hd_bw_bD7SRf&pf_rd_r=A4WSWD6WN0B8WJJ29ZGV&pf_rd_p=32b950f2-608c-56ef-a365-dda9d73a900e&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=193870011">Nuoroda</a></td>
            <td><img src="test.png" alt="Nuotrauka"></td>
            <td>Samsung</td>
        </tr>
        <tr>
            <td>Samsung SSD</td>
            <td>62</td>
            <td>Good SSD - 2TB</td>
            <td><a href="https://www.amazon.com/Seagate-Portable-External-Hard-Drive/dp/B07CRG94G3?ref_=Oct_s9_apbd_otopr_hd_bw_bD7SRf&pf_rd_r=A4WSWD6WN0B8WJJ29ZGV&pf_rd_p=32b950f2-608c-56ef-a365-dda9d73a900e&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=193870011">Nuoroda</a></td>
            <td><img src="test.png" alt="Nuotrauka"></td>
            <td>Samsung</td>
        </tr>
        <tr>
            <td>Samsung SSD</td>
            <td>62</td>
            <td>Good SSD - 2TB</td>
            <td><a href="https://www.amazon.com/Seagate-Portable-External-Hard-Drive/dp/B07CRG94G3?ref_=Oct_s9_apbd_otopr_hd_bw_bD7SRf&pf_rd_r=A4WSWD6WN0B8WJJ29ZGV&pf_rd_p=32b950f2-608c-56ef-a365-dda9d73a900e&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=193870011">Nuoroda</a></td>
            <td><img src="test.png" alt="Nuotrauka"></td>
            <td>Samsung</td>
        </tr>
        <tr>
            <td>Samsung SSD</td>
            <td>62</td>
            <td>Good SSD - 2TB</td>
            <td><a href="https://www.amazon.com/Seagate-Portable-External-Hard-Drive/dp/B07CRG94G3?ref_=Oct_s9_apbd_otopr_hd_bw_bD7SRf&pf_rd_r=A4WSWD6WN0B8WJJ29ZGV&pf_rd_p=32b950f2-608c-56ef-a365-dda9d73a900e&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=193870011">Nuoroda</a></td>
            <td><img src="test.png" alt="Nuotrauka"></td>
            <td>Samsung</td>
        </tr>
    </table>
    </p>

    <script>

        function add(){
            document.getElementById('text').innerHTML = "Detalė pridėta."

            var table = document.getElementById("items");
            var row = document.createElement("tr")
            table.appendChild(row);

            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);

            cell1.innerHTML = "Samsung SSD";
            cell2.innerHTML = "62";
            cell3.innerHTML = "Good SSD - 2TB";
            cell4.innerHTML = "Nuoroda"
            cell5.innerHTML = "Nuotrauka";
            cell6.innerHTML = "Samsung";
        }

        function remove(){
            document.getElementById('text').innerHTML = "Detalė pašalinta."
            document.getElementById("items").deleteRow(1);
        }

        function find(){
            window.open("https://www.amazon.com/PC-Parts-Components/b?ie=UTF8&node=193870011");
        }

        function addU(){
            document.getElementById('text').innerHTML = "Užsakymas pridėtas."
        }

        function filter(){
            document.getElementById('text').innerHTML = "Detalės sufiltruotos."
        }

        function sort(){
            document.getElementById('text').innerHTML = "Detalės surikiuotos."
        }

        function look(){
            window.open("https://www.amazon.com/PC-Parts-Components/b?ie=UTF8&node=193870011");
        }

    </script>

@endsection
