let adsContainer = document.querySelector('.ads_container');

document.addEventListener('DOMContentLoaded', () => {
    getAds();
});

function getAds(){
    let XML = new XMLHttpRequest();
    XML.open('POST', './server/getAds.php');
    XML.send();
    XML.addEventListener('load', () => {
        if(XML.status == 200){
            adsContainer.innerHTML += XML.response;
            console.log("XML: " + XML.response);
        }
    });
}