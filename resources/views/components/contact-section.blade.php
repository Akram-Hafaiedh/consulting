@props(['title' => 'Title'])
<section class="bg-purple-700">
    <div class="container grid grid-cols-1 gap-6 px-4 py-16 mx-auto text-white lg:px-8 md:grid-cols-3">
        <!-- Contact Information -->
        <div class="p-6 text-gray-700 bg-white rounded-lg shadow-lg md:col-span-1">
            <h3 class="mb-4 text-xl font-semibold text-purple-700">{{ $title }}</h3>
            <div class="space-y-4">
                <div>
                    <span class="block text-sm font-medium text-purple-700">Email:</span>
                    <span class="block text-purple-600">contact@example.com</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-purple-700">Téléphone:</span>
                    <span class="block text-purple-600">+33 1 23 45 67 89</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-purple-700">Adresse:</span>
                    <span class="block text-purple-600">123 Avenue de la République, 75001 Paris, France</span>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="p-6 text-gray-700 bg-white rounded-lg md:col-span-2">
            <form action="#" method="POST">
                <h3 class="mb-4 text-xl font-semibold text-purple-700">Envoyez-nous un message</h3>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="name" name="name" required
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-200 focus:ring-opacity-50"
                        placeholder="Votre nom">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-200 focus:ring-opacity-50"
                        placeholder="Votre email">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-200 focus:ring-opacity-50"
                        placeholder="Votre message"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit"
                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-purple-600 border border-transparent rounded-md shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section>
