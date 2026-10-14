
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | REGEN ARDA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
<div class="min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="hidden md:flex w-64 bg-black text-white p-6 flex-col">
        <a href="/" class="text-2xl font-black">
            REGEN<span class="text-emerald-400">.</span>
        </a>
        <p class="text-xs text-gray-400 mt-2 mb-10 tracking-widest">
            PORTFOLIO ADMIN
        </p>

        <nav class="space-y-3">
            <a href="/dashboard"
               class="block p-3 rounded-lg text-gray-300 hover:bg-gray-800">
                Dashboard
            </a>
            <a href="/products"
               class="block p-3 rounded-lg bg-emerald-500 text-black font-bold">
                Products
            </a>
            <a href="/#home"
               class="block p-3 rounded-lg text-gray-300 hover:bg-gray-800">
                View Portfolio
            </a>
            <a href="/login"
               class="block p-3 rounded-lg text-gray-300 hover:bg-gray-800">
                Logout
            </a>
        </nav>

        <div class="mt-auto border-t border-gray-700 pt-5">
            <p class="font-semibold">Regen Arda</p>
            <p class="text-xs text-gray-400">IT / Developer</p>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 min-w-0 p-5 md:p-10">

        <header class="flex flex-wrap justify-between items-center gap-4 mb-8">
            <div>
                <p class="text-sm text-emerald-600 font-bold tracking-widest">
                    INVENTORY
                </p>
                <h1 class="text-3xl md:text-4xl font-black mt-2">
                    Product Management
                </h1>
                <p class="text-gray-500 mt-2">
                    Add, search, edit, and remove your products.
                </p>
            </div>

            <a href="/dashboard"
               class="bg-black text-white px-5 py-3 font-semibold hover:bg-emerald-600">
                ← Dashboard
            </a>
        </header>

        <!-- SUMMARY CARDS -->
        <section class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
            <div class="bg-white border rounded-xl p-5">
                <p class="text-sm text-gray-500">Total Products</p>
                <h2 id="totalProducts" class="text-3xl font-black mt-2">4</h2>
            </div>
            <div class="bg-white border rounded-xl p-5">
                <p class="text-sm text-gray-500">Total Stock</p>
                <h2 id="totalStock" class="text-3xl font-black mt-2">67</h2>
            </div>
            <div class="bg-white border rounded-xl p-5">
                <p class="text-sm text-gray-500">Inventory Value</p>
                <h2 id="totalValue" class="text-3xl font-black mt-2">₱0</h2>
            </div>
        </section>

        <!-- PRODUCT TABLE -->
        <section class="bg-white border rounded-xl overflow-hidden">

            <div class="p-5 md:p-6 border-b flex flex-wrap justify-between items-center gap-4">
                <div>
                    <h2 class="text-xl font-black">All Products</h2>
                    <p class="text-sm text-gray-500 mt-1">
                        Manage your product inventory.
                    </p>
                </div>

                <button onclick="openAddForm()"
                    class="bg-emerald-500 text-black px-5 py-3 font-bold hover:bg-emerald-400">
                    + Add Product
                </button>
            </div>

            <!-- SEARCH AND FILTER -->
            <div class="p-5 flex flex-col sm:flex-row gap-3">
                <input id="searchInput" type="search"
                    placeholder="Search products..."
                    oninput="renderProducts()"
                    class="w-full sm:flex-1 border rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-emerald-500">

                <select id="categoryFilter" onchange="renderProducts()"
                    class="border rounded-lg px-4 py-3">
                    <option value="All">All Categories</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Software">Software</option>
                </select>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-500">
                        <tr>
                            <th class="p-4">Product</th>
                            <th class="p-4">Category</th>
                            <th class="p-4">Price</th>
                            <th class="p-4">Stock</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="productTable" class="divide-y">
                    </tbody>
                </table>
            </div>

            <p id="emptyMessage" class="hidden p-8 text-center text-gray-500">
                No products found.
            </p>

            <div class="p-5 border-t text-sm text-gray-500">
                Showing <span id="shownCount">0</span> products
            </div>
        </section>

        <footer class="mt-8 text-sm text-gray-500">
            © {{ date('Y') }} REGEN ARDA'S PORTFOLIO · Product Management
        </footer>
    </main>
</div>

<!-- ADD / EDIT MODAL -->
<div id="productModal"
    class="hidden fixed inset-0 bg-black/50 items-center justify-center p-4 z-50">

    <div class="bg-white rounded-2xl w-full max-w-lg p-6 md:p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 id="modalTitle" class="text-2xl font-black">Add Product</h2>
            <button type="button" onclick="closeForm()"
                class="text-2xl text-gray-500 hover:text-black">&times;</button>
        </div>

        <form id="productForm" class="space-y-4">
            <input type="hidden" id="productId">

            <div>
                <label class="block text-sm font-semibold mb-2">Product Name</label>
                <input id="productName" required maxlength="100"
                    class="w-full border rounded-lg p-3"
                    placeholder="e.g. Wireless Mouse">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Category</label>
                <select id="productCategory" required
                    class="w-full border rounded-lg p-3">
                    <option value="Electronics">Electronics</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Software">Software</option>
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold mb-2">Price (₱)</label>
                    <input id="productPrice" type="number" min="0"
                        step="0.01" required
                        class="w-full border rounded-lg p-3"
                        placeholder="1000">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">Stock</label>
                    <input id="productStock" type="number" min="0"
                        step="1" required
                        class="w-full border rounded-lg p-3"
                        placeholder="10">
                </div>
            </div>

            <div class="flex gap-3 pt-3">
                <button type="button" onclick="closeForm()"
                    class="flex-1 border rounded-lg p-3 font-semibold">
                    Cancel
                </button>
                <button type="submit"
                    class="flex-1 bg-emerald-500 rounded-lg p-3 font-bold hover:bg-emerald-400">
                    Save Product
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    let products = [
        { id: 1, name: 'Wireless Mouse', category: 'Accessories', price: 550, stock: 20 },
        { id: 2, name: 'Mechanical Keyboard', category: 'Electronics', price: 1800, stock: 10 },
        { id: 3, name: 'USB Flash Drive', category: 'Accessories', price: 350, stock: 25 },
        { id: 4, name: 'Web Development Software', category: 'Software', price: 2500, stock: 12 }
    ];

    let nextId = 5;

    const money = amount => '₱' + Number(amount).toLocaleString('en-PH', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    function escapeHTML(value) {
        return String(value).replace(/[&<>"']/g, char => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        }[char]));
    }

    function renderProducts() {
        const query = document.getElementById('searchInput').value.toLowerCase();
        const category = document.getElementById('categoryFilter').value;

        const filtered = products.filter(product =>
            product.name.toLowerCase().includes(query) &&
            (category === 'All' || product.category === category)
        );

        document.getElementById('productTable').innerHTML = filtered.map(product => `
            <tr class="hover:bg-gray-50">
                <td class="p-4 font-semibold">${escapeHTML(product.name)}</td>
                <td class="p-4 text-sm">${escapeHTML(product.category)}</td>
                <td class="p-4 whitespace-nowrap">${money(product.price)}</td>
                <td class="p-4">${product.stock}</td>
                <td class="p-4">
                    <span class="rounded-full px-3 py-1 text-xs font-semibold ${
                        product.stock === 0
                            ? 'bg-red-100 text-red-700'
                            : product.stock < 10
                                ? 'bg-yellow-100 text-yellow-700'
                                : 'bg-emerald-100 text-emerald-700'
                    }">
                        ${product.stock === 0 ? 'Out of stock' : product.stock < 10 ? 'Low stock' : 'In stock'}
                    </span>
                </td>
                <td class="p-4 whitespace-nowrap">
                    <button onclick="editProduct(${product.id})"
                        class="text-emerald-700 font-semibold mr-3">Edit</button>
                    <button onclick="deleteProduct(${product.id})"
                        class="text-red-600 font-semibold">Delete</button>
                </td>
            </tr>
        `).join('');

        document.getElementById('emptyMessage').classList.toggle('hidden', filtered.length !== 0);
        document.getElementById('shownCount').textContent = filtered.length;
        document.getElementById('totalProducts').textContent = products.length;
        document.getElementById('totalStock').textContent =
            products.reduce((sum, product) => sum + Number(product.stock), 0);
        document.getElementById('totalValue').textContent = money(
            products.reduce((sum, product) => sum + product.price * product.stock, 0)
        );
    }

    function openAddForm() {
        document.getElementById('productForm').reset();
        document.getElementById('productId').value = '';
        document.getElementById('modalTitle').textContent = 'Add Product';
        document.getElementById('productModal').classList.remove('hidden');
        document.getElementById('productModal').classList.add('flex');
    }

    function closeForm() {
        document.getElementById('productModal').classList.add('hidden');
        document.getElementById('productModal').classList.remove('flex');
    }

    function editProduct(id) {
        const product = products.find(item => item.id === id);
        if (!product) return;

        document.getElementById('productId').value = product.id;
        document.getElementById('productName').value = product.name;
        document.getElementById('productCategory').value = product.category;
        document.getElementById('productPrice').value = product.price;
        document.getElementById('productStock').value = product.stock;
        document.getElementById('modalTitle').textContent = 'Edit Product';
        document.getElementById('productModal').classList.remove('hidden');
        document.getElementById('productModal').classList.add('flex');
    }

    document.getElementById('productForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const id = document.getElementById('productId').value;
        const name = document.getElementById('productName').value.trim();
        const category = document.getElementById('productCategory').value;
        const price = Number(document.getElementById('productPrice').value);
        const stock = Number(document.getElementById('productStock').value);

        if (!name || !Number.isFinite(price) || price < 0 ||
            !Number.isInteger(stock) || stock < 0) {
            alert('Please enter valid product details.');
            return;
        }

        if (id) {
            products = products.map(product =>
                product.id === Number(id)
                    ? { id: Number(id), name, category, price, stock }
                    : product
            );
        } else {
            products.push({ id: nextId++, name, category, price, stock });
        }

        closeForm();
        renderProducts();
    });

    function deleteProduct(id) {
        const product = products.find(item => item.id === id);
        if (!product) return;

        if (confirm(`Delete "${product.name}"?`)) {
            products = products.filter(item => item.id !== id);
            renderProducts();
        }
    }

    renderProducts();
</script>

</body>
</html>
