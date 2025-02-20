<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.9.0/dist/css/coreui.min.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.9.0/dist/js/coreui.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    :root {
      --sidebar-width: 250px;
      --header-height: 60px;
      --primary-color:rgb(120, 46, 204);
      --primary-dark:rgb(136, 39, 174);
      --secondary-color: #f8f9fa;
      --text-color: #2c3e50;
      --hover-color: #e8f5e9;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f0f2f5;
    }

    .dashboard {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar Styles */
    .sidebar {
      width: var(--sidebar-width);
      background: white;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      position: fixed;
      height: 100vh;
      overflow-y: auto;
      border-right: 1px solid #e0e0e0;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 30px;
      padding: 10px;
    }

    .nav-item {
      margin-bottom: 10px;
    }

    .nav-link {
      display: flex;
      align-items: center;
      padding: 12px;
      color: var(--text-color);
      text-decoration: none;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      background-color: var(--hover-color);
      color: var(--primary-color);
      transform: translateX(5px);
    }

    .nav-link i {
      margin-right: 10px;
      font-size: 18px;
    }

    .nav-link.active {
      background-color: var(--primary-color);
      color: white;
    }

    /* Search Input */
    .search-container {
      position: relative;
      width: 300px;
    }

    .search-input {
      width: 100%;
      padding: 12px 20px 12px 45px;
      border: 2px solid #e0e0e0;
      border-radius: 25px;
      font-size: 14px;
      transition: all 0.3s ease;
      color: var(--text-color);
      background-color: white;
    }

    .search-input:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(46, 204, 113, 0.2);
    }

    .search-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
      font-size: 18px;
    }

    /* Main Content Styles */
    .main-content {
      flex: 1;
      margin-left: var(--sidebar-width);
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
      background: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    /* Summary Cards */
    .dashboard-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .card {
      background: white;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      border-left: 4px solid var(--primary-color);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-title {
      font-size: 16px;
      color: var(--text-color);
      margin-bottom: 10px;
    }

    .card-value {
      font-size: 28px;
      font-weight: bold;
      color: var(--primary-color);
    }

    /* Table Styles */
    .rooms-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .rooms-table th, .rooms-table td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #eaeaea;
    }

    .rooms-table th {
      background-color: #f8f9fa;
      color: var(--text-color);
      font-weight: 600;
    }

    .rooms-table tr:hover {
      background-color: #f5f5f5;
    }

    /* Status Badges */
    .status-badge {
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 500;
    }

    .status-libre {
      background-color: #e6f7e6;
      color: #27ae60;
    }

    .status-occupee {
      background-color: #ffeaea;
      color: #e74c3c;
    }

    .status-maintenance {
      background-color: #fff5e6;
      color: #f39c12;
    }

    /* Action Buttons */
    .btn {
      padding: 10px 20px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .btn-primary {
      background-color: var(--primary-color);
      color: white;
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
    }

    .action-cell {
      display: flex;
      gap: 8px;
    }

    .action-btn {
      padding: 6px 12px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 13px;
      border: none;
      transition: all 0.2s ease;
    }

    .edit-btn {
      background-color: #3498db;
      color: white;
    }

    .edit-btn:hover {
      background-color: #2980b9;
    }

    .delete-btn {
      background-color: #e74c3c;
      color: white;
    }

    .delete-btn:hover {
      background-color: #c0392b;
    }

    .reserve-btn {
      background-color: var(--primary-color);
      color: white;
    }

    .reserve-btn:hover {
      background-color: var(--primary-dark);
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }

    .modal.active {
      display: flex;
    }

    .modal-content {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      width: 500px;
      max-width: 90%;
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .modal-title {
      font-size: 20px;
      font-weight: bold;
      color: var(--text-color);
    }

    .close-btn {
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
      color: #999;
    }

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

    .cancel-btn {
      background-color: #f8f9fa;
      color: var(--text-color);
      border: 1px solid #e0e0e0;
    }

    .cancel-btn:hover {
      background-color: #e9ecef;
    }

    .notification-badge {
      background: #e74c3c;
      color: white;
      padding: 2px 8px;
      border-radius: 12px;
      font-size: 12px;
      margin-left: 8px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .sidebar {
        width: 70px;
        padding: 10px;
      }

      .logo {
        font-size: 20px;
        text-align: center;
      }

      .nav-link span {
        display: none;
      }

      .main-content {
        margin-left: 70px;
      }

      .search-container {
        width: 200px;
      }

      .dashboard-cards {
        grid-template-columns: 1fr;
      }

      .rooms-table {
        display: block;
        overflow-x: auto;
      }

      .modal-content {
        width: 95%;
      }
    }
  </style>
</head>

<body>
  <div class="dashboard">
    <!-- Sidebar Navigation -->
    <div class="sidebar">
      <div class="logo">Dashboard</div>
      <nav>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-house-door"></i>
            <span>Tableau de bord</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link active">
            <i class="bi bi-door-open"></i>
            <span>Salles</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-calendar-event"></i>
            <span>Réservations</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-people"></i>
            <span>Utilisateurs</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-gear"></i>
            <span>Paramètres</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-bell"></i>
            <span>Notifications</span>
            <span class="notification-badge">3</span>
          </a>
        </div>
      </nav>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
      <div class="header">
        <h1>Gestion des Salles</h1>
        <div class="search-container">
          <i class="bi bi-search search-icon"></i>
          <input type="text" id="searchInput" class="search-input" placeholder="Rechercher une salle...">
        </div>
      </div>

      <!-- Dashboard Summary Cards -->
      <div class="dashboard-cards">
        <div class="card">
          <div class="card-title">Total des Salles</div>
          <div class="card-value">12</div>
        </div>
        <div class="card">
          <div class="card-title">Salles Libres</div>
          <div class="card-value">7</div>
        </div>
        <div class="card">
          <div class="card-title">Salles Occupées</div>
          <div class="card-value">4</div>
        </div>
        <div class="card">
          <div class="card-title">En Maintenance</div>
          <div class="card-value">1</div>
        </div>
      </div>

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
    </div>
  </div>





  <!-- Add/Edit Room Modal -->
  <div class="modal" id="roomModal">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="modalTitle">Ajouter une Salle</h3>
        <button class="close-btn" id="closeModal">&times;</button>
      </div>
      <form id="roomForm">
        <div class="form-group">
          <label for="roomNumber">Numéro de Salle</label>
          <input type="text" id="roomNumber" class="form-control" placeholder="Ex: S101" required>
        </div>
        <div class="form-group">
          <label for="roomName">Nom de la Salle</label>
          <input type="text" id="roomName" class="form-control" placeholder="Ex: Salle de Conférence A" required>
        </div>
        <div class="form-group">
          <label for="roomCapacity">Capacité</label>
          <input type="number" id="roomCapacity" class="form-control" placeholder="Nombre de personnes" required>
        </div>
        <div class="form-group">
          <label for="roomFloor">Étage</label>
          <select id="roomFloor" class="form-control" required>
            <option value="Rez-de-chaussée">Rez-de-chaussée</option>
            <option value="1er étage">1er étage</option>
            <option value="2ème étage">2ème étage</option>
            <option value="3ème étage">3ème étage</option>
            <option value="4ème étage">4ème étage</option>
          </select>
        </div>
        <div class="form-group">
          <label for="roomEquipment">Équipements</label>
          <input type="text" id="roomEquipment" class="form-control" placeholder="Ex: Projecteur, WiFi, Tableau blanc">
        </div>
        <div class="form-group">
          <label for="roomStatus">Statut</label>
          <select id="roomStatus" class="form-control" required>
            <option value="libre">Libre</option>
            <option value="occupee">Occupée</option>
            <option value="maintenance">En maintenance</option>
          </select>
        </div>
        <div class="form-actions">
          <button type="button" class="btn cancel-btn" id="cancelBtn">Annuler</button>
          <button type="submit" class="btn btn-primary" id="saveBtn">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Reservation Modal -->
  <div class="modal" id="reservationModal">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Réserver une Salle</h3>
        <button class="close-btn" id="closeReservationModal">&times;</button>
      </div>
      <form id="reservationForm">
        <div class="form-group">
          <label for="selectedRoom">Salle sélectionnée</label>
          <input type="text" id="selectedRoom" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="reservationDate">Date</label>
          <input type="date" id="reservationDate" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="startTime">Heure de début</label>
          <input type="time" id="startTime" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="endTime">Heure de fin</label>
          <input type="time" id="endTime" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="purpose">Objet de la réservation</label>
          <input type="text" id="purpose" class="form-control" placeholder="Ex: Réunion d'équipe" required>
        </div>
        <div class="form-group">
          <label for="attendees">Nombre de participants</label>
          <input type="number" id="attendees" class="form-control" required>
        </div>
        <div class="form-actions">
          <button type="button" class="btn cancel-btn" id="cancelReservationBtn">Annuler</button>
          <button type="submit" class="btn btn-primary" id="confirmReservationBtn">Confirmer la réservation</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // DOM Elements
    const addRoomBtn = document.getElementById('addRoomBtn');
    const roomModal = document.getElementById('roomModal');
    const closeModal = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const roomForm = document.getElementById('roomForm');
    const modalTitle = document.getElementById('modalTitle');
    const saveBtn = document.getElementById('saveBtn');
    const searchInput = document.getElementById('searchInput');
    const roomsTable = document.getElementById('roomsTable');
    const reservationModal = document.getElementById('reservationModal');
    const selectedRoomInput = document.getElementById('selectedRoom');
    const closeReservationModal = document.getElementById('closeReservationModal');
    const cancelReservationBtn = document.getElementById('cancelReservationBtn');
    const reservationForm = document.getElementById('reservationForm');

    // Event Listeners
    addRoomBtn.addEventListener('click', openAddRoomModal);
    closeModal.addEventListener('click', closeRoomModal);
    cancelBtn.addEventListener('click', closeRoomModal);
    roomForm.addEventListener('submit', saveRoom);
    closeReservationModal.addEventListener('click', closeReservationModalFunc);
    cancelReservationBtn.addEventListener('click', closeReservationModalFunc);
    reservationForm.addEventListener('submit', confirmReservation);
    searchInput.addEventListener('input', filterRooms);

    // Add event listeners to table buttons
    document.querySelectorAll('.edit-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const row = this.closest('tr');
        openEditRoomModal(row);
      });
    });

    document.querySelectorAll('.delete-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const row = this.closest('tr');
        deleteRoom(row);
      });
    });

    document.querySelectorAll('.reserve-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        if (!this.disabled) {
          const row = this.closest('tr');
          openReservationModal(row);
        }
      });
    });

    // Functions
    function openAddRoomModal() {
      modalTitle.textContent = 'Ajouter une Salle';
      roomForm.reset();
      saveBtn.textContent = 'Ajouter';
      roomModal.classList.add('active');
    }

    function openEditRoomModal(row) {
      modalTitle.textContent = 'Modifier une Salle';
      saveBtn.textContent = 'Mettre à jour';

      // Get data from the row
      const cells = row.cells;
      document.getElementById('roomNumber').value = cells[0].textContent;
      document.getElementById('roomName').value = cells[1].textContent;
      document.getElementById('roomCapacity').value = parseInt(cells[2].textContent);
      document.getElementById('roomFloor').value = cells[3].textContent;
      document.getElementById('roomEquipment').value = cells[4].textContent;

      // Set status based on badge class
      const statusBadge = cells[5].querySelector('.status-badge');
      if (statusBadge.classList.contains('status-libre')) {
        document.getElementById('roomStatus').value = 'libre';
      } else if (statusBadge.classList.contains('status-occupee')) {
        document.getElementById('roomStatus').value = 'occupee';
      } else if (statusBadge.classList.contains('status-maintenance')) {
        document.getElementById('roomStatus').value = 'maintenance';
      }

      roomModal.classList.add('active');
    }

    function closeRoomModal() {
      roomModal.classList.remove('active');
    }

    function saveRoom(e) {
      e.preventDefault();

      // Get form values
      const roomNumber = document.getElementById('roomNumber').value;
      const roomName = document.getElementById('roomName').value;
      const roomCapacity = document.getElementById('roomCapacity').value;
      const roomFloor = document.getElementById('roomFloor').value;
      const roomEquipment = document.getElementById('roomEquipment').value;
      const roomStatus = document.getElementById('roomStatus').value;

      // Show success message
      Swal.fire({
        title: modalTitle.textContent === 'Ajouter une Salle' ? 'Salle ajoutée!' : 'Salle modifiée!',
        text: `La salle ${roomName} a été ${modalTitle.textContent === 'Ajouter une Salle' ? 'ajoutée' : 'mise à jour'} avec succès.`,
        icon: 'success',
        confirmButtonText: 'OK',
        confirmButtonColor: '#2ecc71'
      });

      closeRoomModal();
    }

    function deleteRoom(row) {
      const roomNumber = row.cells[0].textContent;
      const roomName = row.cells[1].textContent;

      Swal.fire({
        title: 'Êtes-vous sûr?',
        text: `Voulez-vous vraiment supprimer la salle ${roomName} (${roomNumber})?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler',
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
      }).then((result) => {
        if (result.isConfirmed) {
          // Here would go the actual deletion code
          row.remove();

          Swal.fire(
            'Supprimé!',
            `La salle ${roomName} a été supprimée.`,
            'success'
          );
        }
      });
    }

    function openReservationModal(row) {
      const roomNumber = row.cells[0].textContent;
      const roomName = row.cells[1].textContent;
      selectedRoomInput.value = `${roomNumber} - ${roomName}`;

      // Set default date to today
      const today = new Date().toISOString().split('T')[0];
      document.getElementById('reservationDate').value = today;

      reservationModal.classList.add('active');
    }

    function closeReservationModalFunc() {
      reservationModal.classList.remove('active');
    }

    function confirmReservation(e) {
      e.preventDefault();

      // Get form values
      const selectedRoom = document.getElementById('selectedRoom').value;
      const reservationDate = document.getElementById('reservationDate').value;
      const startTime = document.getElementById('startTime').value;
      const endTime = document.getElementById('endTime').value;
      const purpose = document.getElementById('purpose').value;

      // Format date for display
      const formattedDate = new Date(reservationDate).toLocaleDateString('fr-FR');

      Swal.fire({
        title: 'Réservation confirmée!',

       })
    }
