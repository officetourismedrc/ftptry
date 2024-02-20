const resultContainer = document.querySelector('.searching__result');
const display_style_grid = document.querySelector('.display_style-grid');
const display_style_list = document.querySelector('.display_style-list');

if(resultContainer !== null){
display_style_grid.addEventListener('click', function(){
    if(resultContainer.classList.contains('list-style'))
    resultContainer.classList.remove('list-style');
});

display_style_list.addEventListener('click', function(){
    if(!resultContainer.classList.contains('list-style'))
    resultContainer.classList.add('list-style');
});
}