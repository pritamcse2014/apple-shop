<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <ul class="contact_detail text-center text-lg-start">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                            <li><i class="ti-email"></i><span>info@apple.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-end">
                        <ul class="header_list">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{url("/")}}">
                    <img class="logo_dark" src="{{asset('assets/images/logo_dark.png')}}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item" href="{{url("/")}}">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Products</a>
                            <div class="dropdown-menu">
                                <ul id="categoryItem">

                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="{{url("/")}}"><i class="ti-heart"></i> Wish</a></li>
                        <li><a class="nav-link nav_item" href="{{url("/")}}"><i class="linearicons-cart"></i> Cart </a></li>
                        <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i> Search</a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                    <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div><div class="search_overlay"></div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->

<script>
    // Category();
    async function Category() {
        let res = await axios.get('/categoryList');
        $('#categoryItem').empty();
        res.data['data'].forEach((item, i) => {
            let eachItem = `<li><a class="dropdown-item nav-link nav_item" href="#">${item.categoryName}</a></li>`;
            $('#categoryItem').append(eachItem);
        })
    }
</script>