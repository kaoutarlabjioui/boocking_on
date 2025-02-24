
@extends('dashboard')
@section('content')
      <!-- Rooms Management -->
      <div class="section">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
          <h2>Liste des Salles</h2>
          <!-- <button class="btn btn-primary" id="addRoomBtn">
            <i class="bi bi-plus"></i> Ajouter une Salle
          </button> -->
          <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ajouter une Salle</button>
        </div>
        <table class="rooms-table" id="roomsTable">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Description</th>
              <th>Capacite</th>
              <th>prix</th>
              <th>Statut</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($salles as $salle)
            <tr>
              <td>{{$salle->salle_name}}</td>
              <td>{{$salle->description}}</td>
              <td>{{$salle->capacite}}</td>
              <td>{{$salle->prix}}</td>
              <td><span class="status-badge status-libre">{{$salle->status}}</span></td>
              <td class="action-cell">
                <button class="action-btn reserve-btn">Réserver</button>

                <a href="/updatesalleForm/{{$salle->id}}"  >  <button  class="action-btn edit-btn">Modifier</button></a>

             <a href="/salles/destroy/{{$salle->id}}">   <button class="action-btn delete-btn">Supprimer</button></a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>

      </div>

  <!-- Add/Edit Room Modal -->
  <div id="jobModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-bold mb-4">Publier une offre</h2>
                    <form action="/salles/store" method="POST" class="w-full">
                     @csrf

                        <div class="form-element mb-4">
                          <label for="title" class="block text-gray-700 mb-2">Titre</label>
                          <input type="text" name="salle_name" required placeholder="Titre"  class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="form-element mb-4">
                          <label for="description" class="block text-gray-700 mb-2">Description</label>
                          <input type="text" name="description" required placeholder="Description"   class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="form-element mb-4">
                          <label for="location" class="block text-gray-700 mb-2">capacité</label>
                          <input type="text" name="capacite"  required placeholder="Emplacement" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="form-element mb-4">
                          <label for="phone" class="block text-gray-700 mb-2">prix</label>
                          <input type="text" name="prix" required placeholder="00000" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="flex justify-end space-x-2">
                        <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                        <input type="submit" name="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600" value="Publier">
                    </div>
                </form>
            </div>

    </div>
<script>
        const modal = document.getElementById("jobModal");
        const openModal = document.getElementById("openModal");
        const closeModal = document.getElementById("closeModal");
        const projectsContainer = document.getElementById("projects");

        openModal.addEventListener("click", () => {
            modal.classList.remove("hidden");

        });

        closeModal.addEventListener("click", () => {
            modal.classList.add("hidden");

        });



    </script>
</body>
</html>
@endsection
