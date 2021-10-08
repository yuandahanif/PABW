document.addEventListener('DOMContentLoaded', () => {
    // document.write('halooo dari JS')
    
    const form = document.querySelector('#registeration_form')
    const submitButon = document.querySelector('#btn_submit')

    submitButon.addEventListener('mouseenter', (e) => {
        e.target.innerHTML = "kyaaaa >///<"
    })
    submitButon.addEventListener('mouseleave', (e) => {
        e.target.innerHTML = "kesini lagi dong senpaiii :3"
    })
    
    submitButon.addEventListener('click', (e) => {
        if (form[0].value == '') {
            alert('nama awal anda masih kosong')
        } else {
            prompt('masukan nama depan anda: ')
            alert(`nama awal anda: ${form[0].value}`)
        }
    })
})