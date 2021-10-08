document.addEventListener('DOMContentLoaded', () => {
    // Rekan2, agenda 60 menit kedepan yaitu:
    // Berdasar form registrasi yg telah 
    // Anda buat menggunakan HTML+CSS kemarin silakan ditambahkan:
    // 1. Form validation menggunakan JS. 
    // Ketika tombol submit ditekan, 
    // maka JS akan mengecek apakah smua input ada isinya

    // 2. Menampilkan hasil isian form pada halaman yg sama
    
    var form = document.querySelector('#registeration_form')
    // const submitButon = document.querySelector('#btn_submit')

    // form.addEventListener('submit', (form) => {
    //     const penampung = document.querySelector('#form_submited_value')
    //     let isi_form = ''
    //     form.preventDefault()

    //     for (const f of form.target) {
    //         console.dir(f)
    //         isi_form += f.value + '<br/>';
    //     }
    //     penampung.innerHTML = isi_form;
    // })

    form.addEventListener('submit', (form) => {
        form.preventDefault()
        const penampung = document.querySelector('#form_submited_value')
        penampung.innerHTML = form.target[0].value + form.target[1].value + form.target[2].value;
        penampung.innerHTML += '<br>course: ' + form.target[3].value;
        penampung.innerHTML += '<br>gender: ' + form.target[4].value;
        penampung.innerHTML += '<br>phone: ' + form.target[5].value;
        penampung.innerHTML += '<br>address: ' + form.target[6].value;
        penampung.innerHTML += '<br>email: ' + form.target[7].value;
        penampung.innerHTML += '<br>password: ' + form.target[8].value;
        penampung.innerHTML += '<br>password lagi: ' + form.target[9].value;
    })
})