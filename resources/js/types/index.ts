import { LucideIcon } from 'lucide-react';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavGroup {
    title: string;
    items: NavItem[];
}

export interface NavItem {
    title: string;
    url: string;
    icon?: LucideIcon | null;
    isActive?: boolean;
}

export interface SharedData {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    [key: string]: unknown;
}

export interface User {
    id: number;
    first_name: string;
    last_name: string;
    email: string;
    avatar?: string;
}

export interface Project {
    id: number;
    name: string;
    status: ProjectStatus;
    attributeValues?: AttributeValue[];
}

export interface Timesheet {
    id: number;
    project_id: number;
    user_id: number;
    date: string;
    hours: number;
}

export interface Attribute {
    id: number;
    name: string;
    type: AttributeType;
}

export interface AttributeValue {
    id: number;
    attribute_id?: number;
    attribute?: string;
    project_id?: number;
    value: string;
}

export interface PaginationLinks {
    first: string;
    last: string;
    prev?: string;
    next?: string;
}

export interface PaginationMeta {
    current_page: number;
    from: number;
    last_page: number;
    links: {
        url?: string;
        label: string;
        active: boolean;
    }[];
    path: string;
    per_page: number;
    to: number;
    total: number;
}

export enum ProjectStatus {
    Blocked = 'Blocked',
    Backlog = 'Backlog',
    InProgress = 'In Progress',
    InReview = 'In Review',
    Done = 'Done',
}

export enum AttributeType {
    Text = 'Text',
    Number = 'Number',
    Date = 'Date',
    Select = 'Select',
}
