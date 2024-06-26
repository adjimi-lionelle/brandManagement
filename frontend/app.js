document.addEventListener('DOMContentLoaded', function() {
    fetch('http://127.0.0.1:8000/api/brands')
        .then(response => response.json())
        .then(data => {
            const brandList = document.getElementById('brand-list');
            let i = 1;
            data.forEach(brand => {
                const brandRow = document.createElement('tr');
                brandRow.innerHTML = `
                    <td>${i}</td>
                    <td>${brand.brand_name}</td>
                    <td><img src="${brand.brand_image}" alt="${brand.brand_name}" style="width: 100px;"></td>
                    <td>${brand.rating}</td>
                `;
                i++;
                brandList.appendChild(brandRow);
            });
        });
});