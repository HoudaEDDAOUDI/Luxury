document.addEventListener('DOMContentLoaded',function(){const checkbox=document.querySelector('.container input[type="checkbox"]');const body=document.body;const header=document.querySelector('header');const headerLinks=document.querySelectorAll('header a');const footer=document.querySelector('footer');const otherElements=document.querySelectorAll('.dark-mode-specific');if(!checkbox){console.error("La case à cocher n'a pas été trouvée");return}
function isDarkModeEnabled(){return localStorage.getItem('darkModeEnabled')==='true'}
checkbox.addEventListener('change',function(){if(isDarkModeEnabled()){disableDarkMode()}else{enableDarkMode()}});function enableDarkMode(){body.classList.add('dark-mode');header.classList.add('dark-mode');footer.classList.add('dark-mode');headerLinks.forEach(link=>{link.classList.add('dark-mode')});otherElements.forEach(element=>{element.classList.add('dark-mode')});localStorage.setItem('darkModeEnabled','true')}
function disableDarkMode(){body.classList.remove('dark-mode');header.classList.remove('dark-mode');footer.classList.remove('dark-mode');headerLinks.forEach(link=>{link.classList.remove('dark-mode')});otherElements.forEach(element=>{element.classList.remove('dark-mode')});localStorage.setItem('darkModeEnabled','false')}
if(isDarkModeEnabled()){enableDarkMode()}})