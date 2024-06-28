document.addEventListener('DOMContentLoaded', function() {
    fetch('http://127.0.0.1:8000/api/brands')
        .then(response => response.json())
        .then(data => {
            const brandList = document.getElementById('brand-list');
            let i = 1;
            data.forEach(brand => {
                const brandRow = document.createElement('tr');
                let starsHtml = '';
                for (let j = 0; j < brand.rating; j++) {
                    starsHtml += '<i class="fas fa-star star-yellow"></i>';
                }
                brandRow.innerHTML = `
                    <td>${i}</td>
                    <td><img src="${brand.brand_image}" alt="${brand.brand_name}" class="rounded-image" ></td>
                    <td>${brand.brand_name}</td>
                    <td>${starsHtml}</i></td>
                `;
                brandRow.style.height = '150px'; 
                i++;
                brandList.appendChild(brandRow);
            });
        });
});

document.addEventListener('DOMContentLoaded', function() {
    fetch('http://127.0.0.1:8000/api/allBrands')
        .then(response => response.json())
        .then(data => {
            const brandList = document.getElementById('all-brand-list');
            let i = 1;
            data.forEach(brand => {
                const brandRow = document.createElement('tr');
                let starsHtml = '';
                for (let j = 0; j < brand.rating; j++) {
                    starsHtml += '<i class="fas fa-star star-yellow"></i>';
                }
                brandRow.innerHTML = `
                    <td>${i}</td>
                    <td><img src="${brand.brand_image}" alt="${brand.brand_name}" class="rounded-image" ></td>
                    <td>${brand.brand_name}</td>
                    <td>${starsHtml}</i></td>
                `;
                brandRow.style.height = '150px'; 
                i++;
                brandList.appendChild(brandRow);
            });
        });
});

document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');

    burger.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });
});