const items = [];
const itms = document.querySelectorAll('.item');
itms.forEach(item => {
    item.addEventListener('click', (e)=>{
        e.preventDefault()
        const data = e.target.value
        const name = document.getElementById('name').textContent
        const price = document.getElementById('price').textContent
        const quantity = document.getElementById('qty').value
        const img = document.getElementById('img').src
        const filename = img.replace(/^.*[\\\/]/,'');
        console.log([name, price, quantity, filename, data])
        items.push({data, name, price, quantity, filename})
        const added = localStorage.setItem("cartlist", JSON.stringify(items))
       if (added) {
        alert('added')
       }
        console.log(localStorage.getItem('cartlist'))
        // console.log(e.target.textContent)
    })
    // console.log(item.value);
})
const item = document.querySelector('#item').addEventListener('click', addIUtem)

function addIUtem(e){
    e.preventDefault()
    const value = e.target.value;
    const tm = {id: value}
    items.push(tm)
    console.log(items)
    const senddata  =  fetch('send.php', {
        method: "POST",
        headers: {
            'Content-type': 'application/json'
        },
        body : JSON.stringify(items)
    }).then(res => {return res}).then(data =>console.log(data.text()))
}

// items.push(id)
// const form = new FormData(itemfom)