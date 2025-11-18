<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literal</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-white">

<!-- Hero Background -->
<div class="min-h-screen bg-gradient-to-r from-[#F7E9D3] via-[#E3CFBF] to-[#ECAF6A]/30">

    <!-- NAVBAR -->
    <nav class="w-full flex items-center justify-between px-10 py-5 bg-white/80 backdrop-blur-md shadow-sm">

        <!-- Brand -->
        <div class="text-3xl font-bold" style="color:#ECAF6A">
            Literal
        </div>

        <!-- Menu -->
        <ul class="hidden md:flex gap-8 text-gray-700 font-medium">
            <li class="hover:text-[#ECAF6A] cursor-pointer">HOME</li>
            <li class="hover:text-[#ECAF6A] cursor-pointer">ABOUT</li>
            <li class="hover:text-[#ECAF6A] cursor-pointer">SHOP</li>
            <li class="hover:text-[#ECAF6A] cursor-pointer">CONTACT</li>
        </ul>

        <!-- Icons -->
        <div class="flex items-center gap-5 text-gray-700 text-xl">
            <i class="ri-search-line cursor-pointer hover:text-[#ECAF6A]"></i>
            <i class="ri-user-line cursor-pointer hover:text-[#ECAF6A]"></i>
            <i class="ri-heart-line cursor-pointer hover:text-[#ECAF6A]"></i>
            <i class="ri-shopping-cart-line text-xl hover:text-[#ECAF6A]"></i>
        </div>
    </nav>

    <!-- HERO CONTENT (Rounded Card) -->
    <div class="px-6 md:px-10 lg:px-20 pt-10 pb-20">

        <div class="rounded-3xl bg-white/70 backdrop-blur-sm shadow-xl p-10 md:p-16">
            <div class="grid md:grid-cols-2 gap-10 items-center">

                <!-- LEFT TEXT -->
                <div class="space-y-6">
                    <h1 class="text-5xl font-bold text-gray-800">
                        Negeri 5 Menara
                    </h1>
                    <p class="text-gray-600 text-lg">
                        Limited stocks available. Grab it now!
                    </p>

                    <button
                        class="px-6 py-3 text-white rounded-md text-lg font-medium transition"
                        style="background-color:#ECAF6A;">
                        Shop Collection
                    </button>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="flex justify-center relative">

                    <!-- Left Arrow -->
                    <button class="absolute left-0 top-1/2 -translate-y-1/2 text-3xl text-gray-700 hover:text-[#ECAF6A]">
                        <i class="ri-arrow-left-s-line"></i>
                    </button>

                    <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9789792248616_negeri-5-menara-_cu-cover-baru_.jpg"
                        class="w-64 h-[420px] object-cover shadow-2xl rounded-lg">

                    <!-- Right Arrow -->
                    <button class="absolute right-0 top-1/2 -translate-y-1/2 text-3xl text-gray-700 hover:text-[#ECAF6A]">
                        <i class="ri-arrow-right-s-line"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>

   <!-- FEATURED CATEGORIES -->
<section class="px-6 md:px-10 lg:px-20 mt-14">
    <h2 class="text-2xl font-bold text-gray-800 mb-5">Featured Categories</h2>

    <div class="relative overflow-hidden">

        <div id="categorySlider" class="flex transition-all duration-500">

            <!-- CATEGORY LIST (6 ITEMS) -->
            <!-- 1 -->
            <div class="w-1/3 flex-shrink-0 px-3">
                <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/2664/2664026.png" class="w-20 h-20 mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Novel</h3>
                </div>
            </div>

            <!-- 2 -->
            <div class="w-1/3 flex-shrink-0 px-3">
                <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" class="w-20 h-20 mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Self Improvement</h3>
                </div>
            </div>

            <!-- 3 -->
            <div class="w-1/3 flex-shrink-0 px-3">
                <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3062/3062634.png" class="w-20 h-20 mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Education</h3>
                </div>
            </div>

            <!-- 4 -->
            <div class="w-1/3 flex-shrink-0 px-3">
                <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/2885/2885433.png" class="w-20 h-20 mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Biography</h3>
                </div>
            </div>

            <!-- 5 -->
            <div class="w-1/3 flex-shrink-0 px-3">
                <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/4313/4313092.png" class="w-20 h-20 mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Business</h3>
                </div>
            </div>

            <!-- 6 -->
            <div class="w-1/3 flex-shrink-0 px-3">
                <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" class="w-20 h-20 mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Comics</h3>
                </div>
            </div>

        </div>

        <!-- BUTTONS (Inside, not clipped) -->
        <button onclick="prevCategory()"
            class="absolute left-1 top-1/2 -translate-y-1/2 bg-white shadow-xl rounded-full w-12 h-12 flex
            items-center justify-center text-2xl hover:text-[#ECAF6A] hover:scale-110 transition z-20">
            <i class="ri-arrow-left-s-line"></i>
        </button>

        <button onclick="nextCategory()"
            class="absolute right-1 top-1/2 -translate-y-1/2 bg-white shadow-xl rounded-full w-12 h-12 flex
            items-center justify-center text-2xl hover:text-[#ECAF6A] hover:scale-110 transition z-20">
            <i class="ri-arrow-right-s-line"></i>
        </button>

    </div>
</section>

<!-- BEST SELLER -->
<section class="px-6 md:px-10 lg:px-20 mt-14">
    <h2 class="text-2xl font-bold text-gray-800 mb-5">Best Seller</h2>

    <div class="relative overflow-hidden">

        <div id="bestSellerSlider" class="flex transition-all duration-500">
            <script>
                const bestBooks = [
                    { title: "Bicara Itu Ada Seninya", author: "Oh Su Hyang", img: "https://cdn.gramedia.com/uploads/items/9786020332956_cover_Bicara_itu_Ada_Seninya.jpg" },
                    { title: "Atomic Habits", author: "James Clear", img: "https://cdn.gramedia.com/uploads/items/9786230038580_Atomic_Habits.jpg" },
                    { title: "Seni Bersikap Bodo Amat", author: "Mark Manson", img: "https://cdn.gramedia.com/uploads/items/9786020633176_Seni_untuk_Bersikap_Bodo_Amat.jpg" },
                    { title: "Rich Dad Poor Dad", author: "Robert Kiyosaki", img: "https://cdn.gramedia.com/uploads/items/9786020620466_Rich_Dad_Poor_Dad.jpg" },
                    { title: "Filosofi Teras", author: "Henry Manampiring", img: "https://cdn.gramedia.com/uploads/items/9786020523316_filosofi_terlarang.jpg" },
                    { title: "Melangkah", author: "J.S. Khairen", img: "https://cdn.gramedia.com/uploads/items/9786020647802_Melangkah.jpg" },
                    { title: "Negeri 5 Menara", author: "A. Fuadi", img: "https://cdn.gramedia.com/uploads/items/9789792248616_negeri-5-menara-.jpg" },
                    { title: "Laut Bercerita", author: "Leila S. Chudori", img: "https://cdn.gramedia.com/uploads/items/9786024246940_Laut_Bercerita.jpg" }
                ];

                document.write(
                    bestBooks.map(book => `
                        <div class="w-1/4 flex-shrink-0 px-4">
                            <div class="bg-white shadow-lg rounded-xl p-5 hover:scale-[1.02] transition">
                                <img src="${book.img}" class="w-full h-72 object-cover rounded-md mb-4">
                                <h3 class="font-semibold text-gray-800">${book.title}</h3>
                                <p class="text-gray-600 text-sm">${book.author}</p>
                            </div>
                        </div>
                    `).join('')
                );
            </script>
        </div>

        <!-- BUTTONS (fixed) -->
        <button onclick="prevBest()"
            class="absolute left-2 top-1/2 -translate-y-1/2 bg-white shadow-xl rounded-full w-12 h-12 flex
            items-center justify-center text-2xl hover:text-[#ECAF6A] hover:scale-110 transition z-20">
            <i class="ri-arrow-left-s-line"></i>
        </button>

        <button onclick="nextBest()"
            class="absolute right-2 top-1/2 -translate-y-1/2 bg-white shadow-xl rounded-full w-12 h-12 flex
            items-center justify-center text-2xl hover:text-[#ECAF6A] hover:scale-110 transition z-20">
            <i class="ri-arrow-right-s-line"></i>
        </button>

    </div>
</section>


<script>
    /* CATEGORY SLIDER (6 ITEMS → 3 PER VIEW) */
    let catIndex = 0;
    function nextCategory() {
        if (catIndex < 1) catIndex++;
        document.getElementById("categorySlider").style.transform = `translateX(-${catIndex * 100}%)`;
    }
    function prevCategory() {
        if (catIndex > 0) catIndex--;
        document.getElementById("categorySlider").style.transform = `translateX(-${catIndex * 100}%)`;
    }

    /* BEST SELLER SLIDER (8 ITEMS → 4 PER VIEW) */
    let bestIndex = 0;
    function nextBest() {
        if (bestIndex < 1) bestIndex++;
        document.getElementById("bestSellerSlider").style.transform = `translateX(-${bestIndex * 100}%)`;
    }
    function prevBest() {
        if (bestIndex > 0) bestIndex--;
        document.getElementById("bestSellerSlider").style.transform = `translateX(-${bestIndex * 100}%)`;
    }
</script>


</body>
</html>
