{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('school/1/edit') }}"><i class="nav-icon la la-chalkboard"></i> Information ENSB</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('school-description/1/edit') }}"><i class="nav-icon la la-chalkboard-teacher"></i> Déscription ENSB</a></li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon las la-box-open"></i> Website CMS
    </a>

    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('ad') }}"><i class="nav-icon las la-ad"></i> Announces</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('department') }}"><i class="nav-icon lab la-codepen"></i> Departements</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('news') }}"><i class="nav-icon la la-newspaper"></i> Nouvelles</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('post') }}"><i class="nav-icon la la-blog"></i> Actualité</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('speciality') }}"><i class="nav-icon la la-briefcase"></i> Specialitiés</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('topic') }}"><i class="nav-icon la la-paste"></i> Sujets</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('important-website') }}"><i class="nav-icon la la-globe"></i> Sites important</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('school-in-numbers') }}"><i class="nav-icon la la-sort-numeric-up"></i> L'ecole en chiffres</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('services') }}"><i class="nav-icon la la-server"></i> Services</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon las la-box-open"></i> Mobile CMS
    </a>

    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('mad') }}"><i class="nav-icon las la-ad"></i> Annonces</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('application') }}"><i class="nav-icon la la-mobile"></i> Applications</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon las la-book-reader"></i> E-Library
    </a>

    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('livre') }}"><i class="nav-icon la la-book"></i> Livres</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('etudiant') }}"><i class="nav-icon la la-user-graduate"></i> Etudiants</a></li>
    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact') }}"><i class="nav-icon la la-address-card"></i> Contacts</a></li>

