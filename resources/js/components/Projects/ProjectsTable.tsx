import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import { AttributeValue, Project } from '@/types';

import Utils from '@/lib/utils';
import { JSX } from 'react';

interface Props {
    projects: {
        data: Project[];
    };
    attributeValues: AttributeValue[];
}

export default function ProjectsTable({ projects, attributeValues }: Props) {
    const headersForDynamicAttributes: JSX.Element[] = attributeValues.map((attributeValue: AttributeValue) => (
        <TableHead key={attributeValue.attribute}>{Utils.toSentenceCase(attributeValue.attribute)}</TableHead>
    ));

    const cellsForDynamicAttributes = attributeValues.map((attributeValue) => <TableCell key={attributeValue.attribute}></TableCell>);

    const projectsAsRows: JSX.Element[] = projects.data.map((project) => (
        <TableRow key={project.id}>
            <TableCell>{project.name}</TableCell>
            <TableCell>{Utils.toSentenceCase(project.status)}</TableCell>
            {...cellsForDynamicAttributes}
        </TableRow>
    ));

    return (
        <Table>
            <TableHeader>
                <TableRow>
                    <TableHead>Name</TableHead>
                    <TableHead>Status</TableHead>
                    {...headersForDynamicAttributes}
                </TableRow>
            </TableHeader>
            <TableBody>{projectsAsRows}</TableBody>
        </Table>
    );
}
