<template>
    <div class="p-6 bg-white rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">Dashboard pour la Gestion des Équipements Cloud</h1>
        <div class="flex justify-between mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Add Equipment</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded">Import Excel</button>
        </div>
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Equipment Type</th>
                    <th class="border px-4 py-2">Model</th>
                    <th class="border px-4 py-2">Serial Number</th>
                    <th class="border px-4 py-2">License Type</th>
                    <th class="border px-4 py-2">Expiration Date</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="equipment in equipments" :key="equipment.id">
                    <td class="border px-4 py-2">{{ equipment.type }}</td>
                    <td class="border px-4 py-2">{{ equipment.model }}</td>
                    <td class="border px-4 py-2">{{ equipment.serial }}</td>
                    <td class="border px-4 py-2">{{ equipment.license }}</td>
                    <td class="border px-4 py-2">{{ equipment.expiration }}</td>
                    <td class="border px-4 py-2">
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            equipments: [
                { type: 'Router', model: 'RTX5427', serial: 'SRV12345', license: 'LicenseTypeB', expiration: '2025-11-01' },
                // Add more dummy data here for testing
            ],
        };
    },
};
</script>

<style>
    /* Add styles if necessary */
</style>
