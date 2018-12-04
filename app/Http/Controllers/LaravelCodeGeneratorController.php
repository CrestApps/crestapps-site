<?php

namespace App\Http\Controllers;

class LaravelCodeGeneratorController extends Controller
{

    protected $versions = [
        '1.0',
        '1.1',
        '1.2',
        '2.0',
        '2.1',
        '2.2',
        '2.3',
    ];

    /**
     * Renders the proper document based on the giving version.
     *
     * @param double $version
     *
     * @return string
     */
    public function docs($version)
    {
        $routeName = $this->getIndexRouteName();

        if (!in_array($version, $this->versions, true)) {
            return redirect()->route($routeName, ['version' => $this->getCurrentVersion()]);
        }

        $viewName = $this->getViewPrefix($version, $routeName);

        return View(sprintf('%s.%s', $viewName, 'index'), compact('viewName', 'version', 'routeName'));
    }

    /**
     * Renders the proper workflow based on the giving version.
     *
     * @param double $version
     *
     * @return string
     */
    public function workflow($version)
    {
        $routeName = $this->getIndexRouteName('workflow');

        if (!in_array($version, $this->versions, true)) {
            return redirect()->route($routeName, ['version' => $this->getCurrentVersion()]);
        }

        $viewName = $this->getViewPrefix($version, $routeName);

        return View(sprintf('%s.%s', $viewName, 'index'), compact('viewName', 'version', 'routeName'));
    }

    /**
     * Get a valid version name for view naming.
     *
     * @param $version
     *
     * @return string
     */
    protected function getValidVersion($version)
    {
        return str_replace('.', '-', in_array($version, $this->versions) ? $version : $this->getCurrentVersion());
    }

    /**
     * Get the views prefix name using the giving version
     *
     * @param $version
     * @param $action
     *
     * @return string
     */
    protected function getViewPrefix($version, $routeName, $action = null)
    {
        if (!is_null($action)) {
            return sprintf('%s.v%s.%s', $routeName, $this->getValidVersion($version), $action);
        }

        return sprintf('%s.v%s', $routeName, $this->getValidVersion($version));
    }

    /**
     * Get the doc prefix
     *
     * @return string
     */
    protected function getIndexRouteName($for = 'docs')
    {
        return 'laravel-code-generator.' . $for;
    }

    /**
     * Get the current version
     *
     * @return string
     */
    protected function getCurrentVersion()
    {
        return $this->versions[count($this->versions) - 1];
    }
}
