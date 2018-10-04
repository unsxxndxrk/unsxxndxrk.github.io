var 
    itemsWrap     = document.getElementById('items'),
    numberOfItems = document.getElementById('number_of_items');

numberOfItems.oninput = function() {
    var number = Number(this.value); 
    itemsWrap.innerHTML = '';         //clear items wrapper before injections
    if (number <= 20) {   //20 - max items
        for (let i = 0; i < number; i++) {
            var div = document.createElement('div');
            div.setAttribute('data-val', 1);  //set 1 for default
            div.innerHTML    = div.getAttribute('data-val'); 
            div.style.height = div.getAttribute('data-val') + '%'; 
            itemsWrap.appendChild(div);
        }
    } else { alert('Too much items :('); }
}

function setRandom() {
    let divs = itemsWrap.querySelectorAll('div');
    setColor(divs, 'darkred');
    if (divs.length > 0) {
        for (let i = 0; i < divs.length; i++) {
            divs[i].setAttribute('data-val', getRandomInRange(1, 100));  //generate random value from 1 to 100
            divs[i].innerHTML    = divs[i].getAttribute('data-val');
            divs[i].style.height = divs[i].getAttribute('data-val') + '%'; 
        }
    } else { alert('Nothing to prepare :('); }  //if no divs
}

function insertionSort() {
    var divs = itemsWrap.querySelectorAll('div');
    var i = 1;
    (function() {
        setColor(divs, 'darkgoldenrod');
        if (i < divs.length) {
            const currentDiv = Number(divs[i].getAttribute('data-val'));
            divs[i].style.background = 'darkgreen';
            for (var j = i; j > 0 && Number(divs[j - 1].getAttribute('data-val')) > currentDiv; j--) {
                divs[j].setAttribute('data-val', divs[j - 1].getAttribute('data-val'));
                divs[j].style.height = divs[j].getAttribute('data-val') + '%';
                divs[j].innerHTML    = divs[j].getAttribute('data-val');
            }
            divs[j].style.background = 'darkorchid';
            divs[j].setAttribute('data-val', currentDiv);
            divs[j].style.height = currentDiv + '%';
            divs[j].innerHTML    = currentDiv;
            i++;
            setTimeout(arguments.callee, 800);
        } else { setColor(divs, 'darkgreen'); }
    })();
}

function setColor(arr, color) {
    for (let i = 0; i < arr.length; i++)
        arr[i].style.background = color;
}

function getRandomInRange(min, max) { return Math.floor(Math.random() * (max - min + 1)) + min; }