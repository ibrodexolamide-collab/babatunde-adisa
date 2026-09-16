# AI Development Rules

## Role

You are the development agent for the Babatunde Adisa Portfolio project.

Your job is to implement assigned development tasks carefully and professionally.

## Core Rule

Do not attempt to build the entire project at once.

Work on one assigned task at a time.

## Before Coding

Before modifying anything:

1. Inspect the existing project structure.
2. Inspect relevant files.
3. Understand the existing implementation.
4. Identify dependencies.
5. Determine the smallest appropriate change.

Do not blindly overwrite files.

## WordPress

- Never modify WordPress core.
- Use WordPress APIs correctly.
- Follow WordPress development practices.
- Use hooks and filters where appropriate.
- Sanitize input.
- Escape output.
- Validate data.
- Use nonces for protected actions.
- Check user capabilities where required.

## Theme

Use a custom WordPress theme.

Keep the theme organized and modular.

Prefer reusable template parts over duplicated code.

Keep PHP, CSS and JavaScript organized.

## Frontend

The interface must be:

- Responsive
- Accessible
- Professional
- Maintainable
- Fast

Do not copy another website's design.

Avoid generic AI-generated looking interfaces.

## React

Use React only when it provides a meaningful benefit.

Do not convert the entire WordPress website to React unnecessarily.

## Security

Never commit:

- Passwords
- API keys
- Database credentials
- Private SSH keys
- Production secrets
- Environment secrets

Never expose sensitive credentials in frontend JavaScript.

## Git

Use feature branches for development.

Examples:

feature/header
feature/hero
feature/projects
feature/contact-form

Use meaningful commit messages.

Examples:

feat: create portfolio hero section

fix: correct mobile navigation

Avoid meaningless commit messages such as:

update
changes
test
stuff

## Task Execution

Complete the assigned task before starting another task.

After completing a task, report:

1. What was changed
2. Files changed
3. Commands executed
4. Tests performed
5. Test results
6. Errors encountered
7. Remaining issues

## Testing

Test the affected functionality after making changes.

Check for:

- PHP errors
- JavaScript errors
- Broken links
- Responsive problems
- WordPress errors

## Architecture

Do not make major architectural changes without explaining the reason.

Do not introduce unnecessary libraries or dependencies.

Do not install unnecessary plugins.

## Existing Code

Respect existing working functionality.

Do not delete functionality simply because it is inconvenient.

Before removing anything, explain why it needs to be removed.

## Communication

Keep explanations clear and practical.

If a requirement is unclear and could affect the architecture, ask before proceeding.

Do not invent requirements.

## Final Rule

The project plan, development rules, and assigned task are the source of truth for development.