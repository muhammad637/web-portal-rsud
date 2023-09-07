<div>
    @foreach ($layananKategori as $value)
        <li class="">
            <a class="sidebar-link  {{ Request::is('admin/pages/' . $value->slug.'*') ? 'bg-primary text-white' : '' }} d-flex justify-content-between"
                href="{{ route('admin.layanan', ['kategoriLayanan' => $value->slug]) }}" aria-expanded="false">
                <strong><span class="hide-menu">{{ $value->nama }}</span></strong>
                <span>
                    <i class="fa-solid fa-newspaper"></i>
                </span>
            </a>
        </li>
    @endforeach
</div>
