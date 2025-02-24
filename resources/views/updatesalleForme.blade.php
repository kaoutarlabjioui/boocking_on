<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: var(--text-color);
    }

    .form-control {
      width: 100%;
      padding: 12px;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      font-size: 14px;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(46, 204, 113, 0.2);
    }

    .form-actions {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 30px;
    }
</style>
</head>
<body>




<form action="/salles/update" method="POST" class="w-full">
                     @csrf
                     <input type="hidden" name="id" value="{{$salle->id}}" />
                        <div class="form-element mb-4">
                          <label for="title" class="block text-gray-700 mb-2">Titre</label>
                          <input type="text"  name="salle_name" required placeholder="Titre" value="{{$salle->salle_name}}" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="form-element mb-4">
                          <label for="description" class="block text-gray-700 mb-2">Description</label>
                          <input type="text" name="description" required placeholder="Description" value="{{$salle->description}}" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="form-element mb-4">
                          <label for="location" class="block text-gray-700 mb-2">capacité</label>
                          <input type="text" name="capacite"  required placeholder="Emplacement" value="{{$salle->capacite}}" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="form-element mb-4">
                          <label for="phone" class="block text-gray-700 mb-2">prix</label>
                          <input type="text" name="prix" required placeholder="00000" value="{{$salle->prix}}" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div class="flex justify-end space-x-2">
                        <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                        <input type="submit" name="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600" value="Publier">
                    </div>
                </form>

                </body>
                </html>
