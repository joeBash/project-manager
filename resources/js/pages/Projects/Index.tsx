import { Project, type BreadcrumbItem, type SharedData } from '@/types';
import { Head, usePage } from '@inertiajs/react';

import AppLayout from '@/layouts/app-layout';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Assigned Projects',
        href: '/api/projects',
    },
];

interface Props {
    projects: Project[];
}

export default function Index({ projects }: Props) {
    const { auth } = usePage<SharedData>().props;

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Projects" />
        </AppLayout>
    );
}
