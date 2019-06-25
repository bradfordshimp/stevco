var myFunction = function ()
{

if (window.innerWidth > 600) {
document.write('<link rel="stylesheet" type="text/css" href="css/brown-gold.css">');
console.log('<link rel="stylesheet" type="text/css" href="css/brown-gold.css">');
        } else {
            document.write('<link rel="stylesheet" type="text/css" href="css/brown-gold-single.css">');
        }
    }

    myFunction();

    window.onresize = myFunction();