import { Link } from '@inertiajs/react';

export default function NavLink({ active = false, className = '', children, ...props }) {
    return (
        <Link {...props} className={'d-inline p-3 ' +(active? 'text-primary ': 'text-white') +className }>
            {children}
        </Link>
    );
}
