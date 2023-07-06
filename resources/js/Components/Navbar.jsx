
import NavLink from "./NavLink";

function Navbar(params) {
    return (
        <nav className="bg-default">
            <div className="container d-flex justify-content-between">
                <NavLink href={'/dashboard'}><h1 className="h1 flex text-white">Resepku</h1></NavLink>
                <ul className="mt-auto mb-auto">
                    <NavLink href={'/recipe/create'}>Tulis Resep</NavLink>
                    <NavLink href={route('logout')} method="post" as="button">Logout</NavLink>
                </ul>
            </div>
        </nav>
    );
}

export default Navbar;