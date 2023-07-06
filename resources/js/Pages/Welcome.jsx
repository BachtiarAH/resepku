import ApplicationLogo from "@/Components/ApplicationLogo";
import { Link, Head } from "@inertiajs/react";
import { Button } from "bootstrap";

export default function Welcome({ auth, laravelVersion, phpVersion }) {
    return (
        <>
            <Head title="Welcome" />
            <div className="d-flex justify-center">
                <ApplicationLogo/>
                <Link href="/login">
                <Button className="mt-10 bg-default">Login</Button>
                </Link>
            </div>
        </>
    );
}
