import { PaginationLinks, PaginationMeta, Project, type BreadcrumbItem, type SharedData } from '@/types';
import { Head, usePage } from '@inertiajs/react';

import ProjectsTable from '@/components/Projects/ProjectsTable';
import PaginationPages from '@/components/ui/pagination-pages';
import AppLayout from '@/layouts/app-layout';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Assigned Projects',
        href: '/api/projects',
    },
];

interface Props {
    projects: {
        data: Project[];
        links: PaginationLinks;
        meta: PaginationMeta;
    };
    attributeValues: [];
}

export default function Index({ projects, attributeValues }: Props) {
    const { auth } = usePage<SharedData>().props;

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Projects" />
            {/* TODO: Add filters here */}
            <ProjectsTable projects={projects} attributeValues={attributeValues} />
            <PaginationPages items={projects} />
        </AppLayout>
    );
}
