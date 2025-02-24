<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Salles</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f6fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            padding: 50px 20px;
            max-width: 1400px;
        }

        .page-title {
            color: #1a237e;
            font-size: 2.5rem;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 15px;
        }

        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: #1a237e;
        }

        .rooms-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 30px;
        }

        .room-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .room-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .room-content {
            padding: 25px;
        }

        .room-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .room-title {
            font-size: 1.5rem;
            color: #1a237e;
            margin: 0;
            font-weight: 600;
        }

        .status-badge {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            background-color: #4caf50;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .room-description {
            color: #546e7a;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .room-details {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #37474f;
            margin-bottom: 10px;
        }

        .detail-item:last-child {
            margin-bottom: 0;
        }

        .icon {
            width: 20px;
            height: 20px;
            color: #1a237e;
        }

        .reservation-btn {
            display: inline-block;
            width: 100%;
            padding: 12px 20px;
            background: linear-gradient(45deg, #1a237e, #3949ab);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
        }

        .reservation-btn:hover {
            background: linear-gradient(45deg, #3949ab, #1a237e);
            color: white;
        }

        .modal-content {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background: #1a237e;
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }

        .modal-title {
            font-weight: 600;
            color: white;
        }

        .modal-body {
            padding: 25px;
        }

        .form-label {
            color: #37474f;
            font-weight: 500;
        }

        .form-control {
            border-radius: 6px;
            padding: 12px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: #1a237e;
            box-shadow: 0 0 0 0.2rem rgba(26, 35, 126, 0.25);
        }

        .modal-footer {
            padding: 20px;
            border-top: 1px solid #e0e0e0;
        }

        @media (max-width: 768px) {
            .rooms-container {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 20px 15px;
            }

            .page-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="page-title text-center">Nos Salles</h1>
        <div class="rooms-container">
            @foreach($salles as $salle)
            <div class="room-card">
                <img src="data:image/jpeg;base64,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" alt="{{$salle->salle_name}}" class="room-image">
                <div class="room-content">
                    <div class="room-header">
                        <h2 class="room-title">{{$salle->salle_name}}</h2>
                        <!-- <span class="status-badge">{{$salle->status}}</span> -->
                    </div>
                    <p class="room-description">{{$salle->description}}</p>
                    <div class="room-details">
                        <div class="detail-item">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span>Capacité: {{$salle->capacite}} personnes</span>
                        </div>
                        <div class="detail-item">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            <span>Prix : {{$salle->prix}}</span>
                        </div>
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#reservationModal{{$salle->id}}" class="reservation-btn">
                        Réserver maintenant
                    </a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="reservationModal{{$salle->id}}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Réservation - {{$salle->salle_name}}</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="/reservation/store" method="POST">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="salle_id" value="{{$salle->id}}">
                                <div class="mb-4">
                                    <label for="name{{$salle->id}}" class="form-label">Nom de la réservation</label>
                                    <input type="text" class="form-control" id="name{{$salle->id}}" name="titre" value="{{$salle->salle_name}}">
                                </div>
                                <div class="mb-4">
                                    <label for="start_date{{$salle->id}}" class="form-label">Date de début</label>
                                    <input type="date" class="form-control" id="start_date{{$salle->id}}" name="date_debut" required>
                                </div>
                                <div class="mb-4">
                                    <label for="end_date{{$salle->id}}" class="form-label">Date de fin</label>
                                    <input type="date" class="form-control" id="end_date{{$salle->id}}" name="date_fin" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="reservation-btn" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="reservation-btn">Confirmer la réservation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
