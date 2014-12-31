<?php

class DashboardController extends Controller
{
    /**
     * Shows the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function showDashboard()
    {
        // TODO: Find steps needed to complete setup.
        $components = Component::all();

        return View::make('dashboard.index')->with([
            'components' => $components,
        ]);
    }

    /**
     * Shows the team members view.
     *
     * @return \Illuminate\View\View
     */
    public function showTeamView()
    {
        $team = User::all();

        return View::make('dashboard.team')->with([
            'pageTitle'   => 'Team Members - Dashboard',
            'teamMembers' => $team,
        ]);
    }

    /**
     * Shows the metrics view.
     *
     * @return \Illuminate\View\View
     */
    public function showMetrics()
    {
        return View::make('dashboard.metrics')->with([
            'pageTitle' => 'Metrics - Dashboard',
        ]);
    }

    /**
     * Shows the notifications view.
     *
     * @return \Illuminate\View\View
     */
    public function showNotifications()
    {
        return View::make('dashboard.notifications')->with([
            'pageTitle' => 'Notifications - Dashboard',
        ]);
    }
}
