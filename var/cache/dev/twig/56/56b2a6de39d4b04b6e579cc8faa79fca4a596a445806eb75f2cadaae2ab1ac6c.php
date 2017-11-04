<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e53e1fd0496514809c7ca299076da250b4c89e376be26a061f7fb3d03ccfbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e53e1fd0496514809c7ca299076da250b4c89e376be26a061f7fb3d03ccfbc3->enter($__internal_8e53e1fd0496514809c7ca299076da250b4c89e376be26a061f7fb3d03ccfbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a710b568699fab70963c828d218ae468eb8f6f04da32b5de57b11cb2bfb75b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a710b568699fab70963c828d218ae468eb8f6f04da32b5de57b11cb2bfb75b22->enter($__internal_a710b568699fab70963c828d218ae468eb8f6f04da32b5de57b11cb2bfb75b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8e53e1fd0496514809c7ca299076da250b4c89e376be26a061f7fb3d03ccfbc3->leave($__internal_8e53e1fd0496514809c7ca299076da250b4c89e376be26a061f7fb3d03ccfbc3_prof);

        
        $__internal_a710b568699fab70963c828d218ae468eb8f6f04da32b5de57b11cb2bfb75b22->leave($__internal_a710b568699fab70963c828d218ae468eb8f6f04da32b5de57b11cb2bfb75b22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
