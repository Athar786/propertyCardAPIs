
<div id="property-list" class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <p id="loading" class="col-span-3 text-center">Loading properties...</p>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    fetch('/api/properties')
        .then(res => res.json())
        .then(res => {
            if (res.success) {
                let container = document.getElementById('property-list');
                res.data.forEach(property => {
                    container.innerHTML += `
                    <div class="max-w-sm bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
    <!-- Image & Badge -->
    <div class="relative">
        <img src="${property.image_url}" alt="Property Image" class="w-full h-48 object-cover">
        <span class="absolute top-2 left-2 bg-red-600 text-white px-3 py-1 text-xs rounded">${property.status}</span>
        <button class="absolute bottom-2 right-2 bg-white rounded-full p-2 shadow hover:bg-gray-100">
            ❤️
        </button>
    </div>

    <!-- Content -->
    <div class="p-4">
        <!-- Price -->
        <p class="text-red-600 font-bold text-lg">${property.currency} ${property.price}</p>

        <!-- Title -->
        <h2 class="font-semibold text-gray-900">${property.location.address}</h2>

        <!-- Location -->
        <p class="text-sm text-gray-600 flex items-center mt-1">
            📍 ${property.location.address}</p>

        <!-- Property Details -->
        <div class="grid grid-cols-2 gap-3 text-sm text-gray-700 mt-3">
            <div class="flex items-center space-x-1">
                <span>🛏</span><span>Bedrooms:${property.bedrooms}</span>
            </div>
            <div class="flex items-center space-x-1">
                <span>📐</span><span>Area: ${property.area} m²</span>
            </div>
            <div class="flex items-center space-x-1">
                <span>🛁</span><span>Bathrooms: ${property.bathrooms}</span>
            </div>
            <div class="flex items-center space-x-1">
                <span>📅</span><span>Available from:${property.available_from}</span>
            </div>
        </div>

        <!-- Footer -->
        <div class="flex justify-between items-center border-t pt-3 mt-3 text-sm">
                  <div class="text-right">
                <p class="text-gray-500">Posted on</p>
                <p>${property.posted_on}</p>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex border-t">
        <button class="w-1/2 p-3 flex items-center justify-center space-x-2 hover:bg-gray-50">
            <span>💬</span><span>Enquire</span>
        </button>
        <button class="w-1/2 p-3 flex items-center justify-center space-x-2 border-l hover:bg-gray-50">
            <span>📞</span><span>Call</span>
        </button>
    </div>
</div>

                    `;
                });
            }
        })
        .catch(err => console.error(err));
});
</script>
