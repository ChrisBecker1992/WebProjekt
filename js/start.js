/**
 * Created by tomda on 23.06.2017.
 */
function myFunction(x) {

    x.classList.toggle("change");

    var y = document.getElementById('dropdowncontent');

    if (y.style.display === 'block'){

        $('#dropdowncontent').fadeOut("slow").style.display = 'none';

    } else {

        $('#dropdowncontent').fadeIn("slow").style.display = 'block';
    }
}


