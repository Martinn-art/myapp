<x-Background>
<x-NavV>

</x-NavV>

<h4>Registrace k odběru jídelního lístku:</h4>

<form action="" method="post">
    @csrf
    <input type="text" name="website" style="display: none;">
    <!-- nebo bezpečněji pomocí CSS třídy -->
    <div class="honeypot" style="display:none;">
        <label for="website">Pro Vás:</label>
        <input type="text" name="website" id="website">
    </div>

    <label for="name">Jméno:</label>
    <input type="text" name="name" id="">

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="">

    <label for="jídelníLístek">Tímto zaškrnutím si přeji, nechat si posílat do emailové schránky jídelní lístek:</label>
    <input type="checkbox" name="jídelníLístek" id="">

</form>

</x-Background>
