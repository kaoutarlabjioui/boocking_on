
@extends('dashboard')
@section('content')
      <!-- Rooms Management -->
      <div class="section">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
          <h2>Liste des Salles</h2>
          <button class="btn btn-primary" id="addRoomBtn">
            <i class="bi bi-plus"></i> Ajouter une Salle
          </button>
        </div>
        <table class="rooms-table" id="roomsTable">
          <thead>
            <tr>
              <th>First name</th>
              <th>Last name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Statut</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{$user->fname}}</td>
              <td>{{$user->lname}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->email}}</td>
              <td><span class="status-badge status-libre">{{$user->role->role_name}}</span></td>
              <td class="action-cell">
                <button class="action-btn reserve-btn">Réserver</button>
                <button class="action-btn edit-btn">Modifier</button>
                <button class="action-btn delete-btn">Supprimer</button>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>

      </div>
@endsection
