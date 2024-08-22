document.querySelector('.catalog_wrapper').addEventListener('click', function () {
    const catalogButtonLoupe = document.querySelector('.catalog-loupe');
    const catalogButtoncross = document.querySelector('.catalog-cross');
    if (catalogButtonLoupe.style.display === 'none') {
        catalogButtonLoupe.style.display = 'flex';
        catalogButtoncross.style.display = 'none';
    } else {
        catalogButtonLoupe.style.display = 'none';
        catalogButtoncross.style.display = 'flex';
    }
});

document.querySelectorAll('.catalog__menu').forEach(item => {
    item.addEventListener('click', function () {
        document.querySelectorAll('.catalog__menu').forEach(tag => {
            tag.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// document.querySelectorAll('.help-detail-switch__tag').forEach(item => {
//     item.addEventListener('click', function () {
//         const contentId = this.getAttribute('data-content');
//         const breadCrumbId = this.getAttribute('data-breadcrumbs');
//         document.querySelectorAll('.help-detail-switch__tag').forEach(tag => {
//             tag.classList.remove('active');
//         });
//         this.classList.add('active');
        
//         document.querySelectorAll('.help-detail-switch__content content').forEach(content => {
//             content.classList.remove('active');
//         });
//         document.getElementById(contentId).classList.add('active');

//         document.querySelectorAll('.breadcrumbs_help').forEach(breadcrumb => {
//             breadcrumb.classList.remove('active')
//         });
//         document.getElementById(breadCrumbId).classList.add('active');
//     });
// });

