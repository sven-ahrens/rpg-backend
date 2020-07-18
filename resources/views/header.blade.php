<header class="navigation">
    <button class="button--close">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    @if (!\Illuminate\Support\Facades\Auth::user())
        <ul>
            <li>
                <a href="/login">Sign in</a>
            </li>
            <li>
                <a href="/account/creation">Sign up</a>
            </li>
            <li class="list-item--short">
                <a href="#">DE</a>
            </li>
            <li class="list-item--short">
                <a href="#">EN</a>
            </li>
        </ul>
    @else
        <ul>
            <li>
                <a href="/">Forum</a>
            </li>
            <li>
                <a href="/notifications">Benachrichtigung</a>
            </li>
            <li>
                <a href="/messages">Direktnachricht</a>
            </li>
            <li>
                <a href="/logout">Logout</a>
            </li>
            <li class="list-item--short">
                <a href="#">DE</a>
            </li>
            <li class="list-item--short">
                <a href="#">EN</a>
            </li>
        </ul>
    @endif
</header>
<script>
    const closeButton = document.querySelector('.button--close')
    const header = document.querySelector('.navigation')

    closeButton.onclick = function () {
        if (header.classList.contains('navigation--mobile')) {
            header.classList.remove('navigation--mobile')
        } else {
            header.classList.add('navigation--mobile')
        }
    }
</script>
