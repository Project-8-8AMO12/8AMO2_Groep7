@section('header')
    <nav class="navbar navbar-expand-md " style="background-color: #ffd73d;">
        <a class="navbar-brand" href="/"><img src="https://www.imkersleiden.nl/wp-content/uploads/2019/07/Logo-Imkers-Leiden.svg" width="175px" alt="Logo" class="d-inline-block align-middle mr-2"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/activiteiten">Activiteiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/agenda">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/cursussen">Cursussen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/contact">Contact</a>
                </li>
                <div class="dropdown">
                    <a class=" btn btn-secondary dropdown-toggle" style="background-color: #ffd73d; border-color: #ffd73d; padding-top: 7.7px;" href="/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Overige
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #ffd73d">
                        <a class="nav-link text-white" href="/bijenstal">Bijenstal</a>
                        <a class="nav-link text-white" href="/foto">Foto</a>
                        <a class="nav-link text-white" href="/nieuws">Nieuws</a>
                        <a class="nav-link text-white" href="/stertselaar">Sterselaar</a>
                        <a class="nav-link text-white" href="/vereniging">Vereniging</a>
                        <a class="nav-link text-white" href="/winkel">Winkel</a>
                        <a class="nav-link text-white" href="/zwermgezien">Zwerm Gezien</a>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/login"> <i class="fas fa-user text-white"></i> Inloggen/Registreren</a>
                </li>
            </ul>
        </div>
    </nav>
@show
