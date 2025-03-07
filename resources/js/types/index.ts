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
    created_at: string;
    updated_at: string;
}

export interface Project {
    id: number;
    name: string;
    status: ProjectStatus;
    created_at: string;
    updated_at: string;
}

export interface Timesheet {
    id: number;
    project_id: number;
    user_id: number;
    date: string;
    hours: number;
    created_at: string;
    updated_at: string;
}

export interface Attribute {
    id: number;
    name: string;
    type: AttributeType;
    created_at: string;
    updated_at: string;
}

export interface AttributeValue {
    id: number;
    attribute_id: number;
    project_id: number;
    value: string;
    created_at: string;
    updated_at: string;
}

export enum ProjectStatus {
    Blocked = 'blocked',
    Backlog = 'backlog',
    InProgress = 'in-progress',
    InReview = 'in-review',
    Done = 'done',
}

export enum AttributeType {
    Text = 'text',
    Number = 'number',
    Date = 'date',
    Select = 'select',
}
