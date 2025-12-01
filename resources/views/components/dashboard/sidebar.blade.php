<aside class="hidden md:block col-span-1 space-y-4">
    <div class="p-4 bg-white rounded-xl shadow">
        <h3 class="font-semibold">Menu</h3>
        <ul class="mt-3 text-sm space-y-2">
            <li><a class="block hover:text-indigo-600" href="{{ route('dashboard') }}">🏠 Home</a></li>
            <li><a class="block hover:text-indigo-600" href="{{ route('profile.edit') }}">👤 Profile</a></li>
            <li><a class="block hover:text-indigo-600" href="#">💬 Messages</a></li>
            <li><a class="block hover:text-indigo-600" href="#">⚙️ Settings</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" onclick()="logoutbtn" class="w-full text-left hover:text-indigo-600">🚪 Logout</button>
                </form>
            </li>
        </ul>
    </div>
</aside>

<script>
    // You can add interactivity here if needed in the future
    function logoutbtn(){
        if (confirm('Are you sure you want to log out?')){
            document.getElementById('logoutForm').submit();
        }
    }
</script>
